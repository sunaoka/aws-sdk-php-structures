<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProvisionedThroughput|null $ProvisionedThroughput
 * @property int<1, 16384>|null $VolumeSize
 */
class EBSStorageInfo extends Shape
{
    /**
     * @param array{
     *     ProvisionedThroughput?: ProvisionedThroughput|null,
     *     VolumeSize?: int<1, 16384>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
