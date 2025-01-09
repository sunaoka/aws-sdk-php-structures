<?php

namespace Sunaoka\Aws\Structures\Chime\ListChannelBans;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ChannelArn
 * @property string $NextToken
 * @property list<Shapes\ChannelBanSummary> $ChannelBans
 */
class ListChannelBansResponse extends Response
{
}
