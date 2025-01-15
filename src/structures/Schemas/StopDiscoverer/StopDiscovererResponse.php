<?php

namespace Sunaoka\Aws\Structures\Schemas\StopDiscoverer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DiscovererId
 * @property 'STARTED'|'STOPPED'|null $State
 */
class StopDiscovererResponse extends Response
{
}
