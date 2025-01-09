<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServerHostname
 * @property int<1, 65535> $ServerPort
 */
class DiscoveryServerConfiguration extends Shape
{
    /**
     * @param array{
     *     ServerHostname: string,
     *     ServerPort?: int<1, 65535>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
