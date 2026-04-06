<?php

namespace Sunaoka\Aws\Structures\Wickr\GetDataRetentionBot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $botName
 * @property bool|null $botExists
 * @property bool|null $isBotActive
 * @property bool|null $isDataRetentionBotRegistered
 * @property bool|null $isDataRetentionServiceEnabled
 * @property bool|null $isPubkeyMsgAcked
 */
class GetDataRetentionBotResponse extends Response
{
}
