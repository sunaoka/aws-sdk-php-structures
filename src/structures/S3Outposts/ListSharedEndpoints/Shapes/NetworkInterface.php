<?php

namespace Sunaoka\Aws\Structures\S3Outposts\ListSharedEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NetworkInterfaceId
 */
class NetworkInterface extends Shape
{
    /**
     * @param array{NetworkInterfaceId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
