<?php

namespace Sunaoka\Aws\Structures\APIPortal\StopDiscovery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class StopDiscoveryRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
