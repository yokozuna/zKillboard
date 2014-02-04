<?php
/* zKillboard
 * Copyright (C) 2012-2013 EVE-KILL Team and EVSCO.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
class Twit
{
	/**
	 * @param string $message
	 */
	public static function sendMessage($message)
	{
		global $consumerKey, $consumerSecret, $accessToken, $accessTokenSecret;
		$twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

		return $twitter->send($message);
	}

	public static function getMessages($amount = 1)
	{
		global $consumerKey, $consumerSecret, $accessToken, $accessTokenSecret;
		$twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

		return $twitter->load(Twitter::REPLIES, $amount);
	}

	public static function findMessages($amount = 1)
	{
		global $consumerKey, $consumerSecret, $accessToken, $accessTokenSecret;
		$twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

		return $twitter->load(Twitter::ME_AND_FRIENDS, $amount);
	}

	public static function shortenUrl($url)
	{
		return file_get_contents("http://is.gd/api.php?longurl=" . $url);
	}
}
