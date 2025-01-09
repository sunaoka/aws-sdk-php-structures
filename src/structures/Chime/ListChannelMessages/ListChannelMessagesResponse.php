<?php

namespace Sunaoka\Aws\Structures\Chime\ListChannelMessages;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ChannelArn
 * @property string $NextToken
 * @property list<Shapes\ChannelMessageSummary> $ChannelMessages
 */
class ListChannelMessagesResponse extends Response
{
}
