<?php

// Query settings
$srv_cfg['q_user']        = "serveradmin";
$srv_cfg['q_pass']        = "dFlHJ0Q6";

// Server settings
$srv_cfg['s_address']     = "127.0.0.1";
$srv_cfg['s_port']        = "9987";
$srv_cfg['q_port']        = "10011";


$cfg['bot_default_channel_id']      = "797"; // Will join this channel after connecting, so he will be listening to this channel messages (can be blank)
$cfg['bot_default_channel_pass']    = ""; // Channel password
$cfg['bot_nickname']                = "NastyBot"; // Max: 30 Characters.
$cfg['onconnect_log_msg']           = "MagicBot by Elektro successfully joined the server!"; // Message shown in TS3 log server

// [For the 3 next settings] Can be UIDs (ex: "ROPmvjD7kS4rcF9PaYOyRHrLG6A=") or server groups ids (ex: 48). Other users are Level 0.
$cfg['moderators']                  = [""]; // Level 1
$cfg['administrators']              = ["yjEpureJpWsuhfDJtyEs9qKaAQg=", 48];  // Level 2
$cfg['super-administrators']        = ["ROPmvjD7kS4rcF9PaYOyRHrLG6A="]; // Level 3

$cfg['date_format']   = 'd-m G:i:s';
$cfg['anti_timeout']  = 30;


// Max lenghts:
  // Nickname: 30 Characters
  // Poke: 100 Characters
  // Client descr: 200 Characters
  // Channel name: 40 Characters
  // PM : 1024 Bytes



/*

// ====== [ MODULES SETTINGS ] ====== //

*/


// Welcome private Message Module //
    // General settings
$cfg['modules']['welcome_pm']['enabled'] = false;            // TURN ON/OFF THE MODULE ('true' for on, 'false' for off)

    // Messages rules definitions
        // ["msg mode, 'poke' or 'pm'", "server groups ids separated by commas (leave blank for everyone)", "groups mode 'ignore' or 'only'", "Your message, BBCode Can be used for PM."]

$cfg['modules']['welcome_pm']['msg']['rules'][] = ["pm", "71", "only", "Hey cutie. What about starting a game?"];



// Server Group assignement on Channel Join //
	// Can be used to assing SG such as "Playing CS:GO" or so.
    // General settings
$cfg['modules']['SG_onChannelJoin']['enabled']      = false;     // TURN ON/OFF THE MODULE ('true' for on, 'false' for off)

    // Rules definitions
      // = ["servergroups_togive", "watched_channels", "msg_to_client", "kick_on"]; (kick_on: kick after giving SG)
      // = ['72,89,16', '849,25', "You're now channel admin!", true];

$cfg['modules']['SG_onChannelJoin']['rules'][]      = ['72', '796,123', "", false];




// Autocreate Sub-channels module //
    // General settings
$cfg['modules']['sub_channel']['enabled'] = true;                         // Turn ON/OFF the module
$cfg['modules']['sub_channel']['cfg']['max_subchannels_create'] = 100;    // Maximum amount of auto created sub-channels (must be btwn 1 and 200.) → Dynamic module
																			// (WARNING: Setting over 200 could cause horrific bot panic: the bot check each sub-channels before creating one.)
$cfg['modules']['sub_channel']['cfg']['reached_limit_msg'] = "Can't give you a channel because limit has been reached."; // Msg when max_subchannels_create has been reached
$cfg['modules']['sub_channel']['cfg']['channel_max_client'] = 10;         // Max clients for subchannels (set -1 for unlimited)
$cfg['modules']['sub_channel']['cfg']['channel_delete_delay'] = 6;        // Channel auto-delete when empty delay in seconds
$cfg['modules']['sub_channel']['cfg']['ignored_sg'] = ['220'];            // Those server groups will be ignored by the modules (sub_channel & sub_channel_personalised) (ex: ['23,802'])



    // Channels rules definitions
        // = ["channel_id", "channel_pass", "channel name 1", "channel name 2", "channel name 3"];  → Static module: channels name are defined
        // = ["channel_id", "channel_pass", "channel name "];  → Dynamic module: channels name is set once, then each channels increase (chan_name 1, chan_name 2,...)

// Those are exemples, please modify or remove before using bot.
$cfg['modules']['sub_channel']['cfg']['rules'][] = ["842", "", "Chez Jawad (nuitée gratuite)", "Open Bar-mitsva", "T'es qui là?", "Pas l'temps d'niaiser!",
                                                    "Un chameau mal brossé", "Alibaba et les 40 saveurs", "Le grapin d'Elektro", "La grosse Bique à Dudule", "Masque à rats",
                                                     "Martine chez l'marchand d'shit", "Honneur au dieu des pâtes", "Sacrifice de vierges"]; // Home gneral channels


$cfg['modules']['sub_channel']['cfg']['rules'][] = ["872", "", "Piltover", "Freljord", "Shurima",
                                                    "Demacia", "Bilgewater", "Noxus", "Runeterra",
                                                    "Ionia", "Serpentine River", "Guardian's sea",
                                                    "Lokfar", "Shadow Isles"]; // LOL CHANS (Static)


$cfg['modules']['sub_channel']['cfg']['rules'][] = ["889", "", "Alpha", "Bravo", "Charlie",
                                                    "Delta", "Echo", "Foxtrot", "Golf",
                                                    "Hotel", "India", "Juliet",
                                                    "kilo", "Lima", "Mike", "November",
                                                    "Oscar", "Papa", "Quebec", "Romeo",
                                                    "Sierra", "Tango", "Uniform", "Victor",
                                                    "Whiskey", "X-Ray", "Yankee", "Zulu"]; // CSGO CHANS CHANS (Static)


$cfg['modules']['sub_channel']['cfg']['rules'][] = ["801", "choucroute23", "Staff Channel • "]; // Staff (Dynamic)



// Personalised subchannels module //
    // (example: if X join, channel name will be "Channel of X the great" but when Y does, it'll be "Channel of Y the tall")

// General settings
$cfg['modules']['sub_channel_personalised']['enabled'] = true;                                      // Turn ON/OFF the module
$cfg['modules']['sub_channel_personalised']['cfg']['channel_max_client'] = 1;                       // Max clients for subchannels (set -1 for unlimited)
$cfg['modules']['sub_channel_personalised']['cfg']['channel_maxfamilyclient_inherited'] = TRUE;     // Max family clients for subchannels (set -1 for unlimited)
$cfg['modules']['sub_channel_personalised']['cfg']['channel_delete_delay'] = 3;                     // Channel delay in seconds




// Channels rules definitions
    // = ["parent_channel_id", "channel_pass", "client_uid", "channel name"];

// Those are exemples, please modify or remove before using bot.
$cfg['modules']['sub_channel_personalised']['cfg']['rules'][] = ["801", "unchammeaubienbo", "ROPmvjD7kS4rcF9PaYOyRHrLG6A=", "Dynaste du peuple Caronastien"];
$cfg['modules']['sub_channel_personalised']['cfg']['rules'][] = ["903", "randompass123456", "mBOP1GD/Wl6XJ7bL+ydnZaKhjLc=", "Le vieux retraité"];
$cfg['modules']['sub_channel_personalised']['cfg']['rules'][] = ["801", "unchammeaubienbo", "yjEpureJpWsuhfDJtyEs9qKaAQg=", "Booker Dewitt's Office"];






?>
