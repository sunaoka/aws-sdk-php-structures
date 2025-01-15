<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannelMessages;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ChannelArn
 * @property string|null $NextToken
 * @property list<Shapes\ChannelMessageSummary>|null $ChannelMessages
 * @property string|null $SubChannelId
 */
class ListChannelMessagesResponse extends Response
{
}
