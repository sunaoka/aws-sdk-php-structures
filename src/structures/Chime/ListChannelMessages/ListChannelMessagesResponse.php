<?php

namespace Sunaoka\Aws\Structures\Chime\ListChannelMessages;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ChannelArn
 * @property string|null $NextToken
 * @property list<Shapes\ChannelMessageSummary>|null $ChannelMessages
 */
class ListChannelMessagesResponse extends Response
{
}
