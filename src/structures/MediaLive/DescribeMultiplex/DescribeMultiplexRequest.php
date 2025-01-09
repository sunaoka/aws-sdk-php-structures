<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeMultiplex;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MultiplexId
 */
class DescribeMultiplexRequest extends Request
{
    /**
     * @param array{MultiplexId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
