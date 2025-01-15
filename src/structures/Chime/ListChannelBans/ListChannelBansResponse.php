<?php

namespace Sunaoka\Aws\Structures\Chime\ListChannelBans;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ChannelArn
 * @property string|null $NextToken
 * @property list<Shapes\ChannelBanSummary>|null $ChannelBans
 */
class ListChannelBansResponse extends Response
{
}
