<?php

namespace Sunaoka\Aws\Structures\Schemas\StopDiscoverer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DiscovererId
 */
class StopDiscovererRequest extends Request
{
    /**
     * @param array{DiscovererId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
