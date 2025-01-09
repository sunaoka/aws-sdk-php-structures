<?php

namespace Sunaoka\Aws\Structures\Schemas\StartDiscoverer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DiscovererId
 */
class StartDiscovererRequest extends Request
{
    /**
     * @param array{DiscovererId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
