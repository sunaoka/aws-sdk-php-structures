<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannelMessages;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ChannelArn
 * @property string $NextToken
 * @property list<Shapes\ChannelMessageSummary> $ChannelMessages
 * @property string $SubChannelId
 */
class ListChannelMessagesResponse extends Response
{
}
