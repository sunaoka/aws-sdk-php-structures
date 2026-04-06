<?php

namespace Sunaoka\Aws\Structures\Chime\ListChannelModerators;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ChannelArn
 * @property string|null $NextToken
 * @property list<Shapes\ChannelModeratorSummary>|null $ChannelModerators
 */
class ListChannelModeratorsResponse extends Response
{
}
