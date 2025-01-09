<?php

namespace Sunaoka\Aws\Structures\Schemas\DescribeDiscoverer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DiscovererId
 */
class DescribeDiscovererRequest extends Request
{
    /**
     * @param array{DiscovererId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
