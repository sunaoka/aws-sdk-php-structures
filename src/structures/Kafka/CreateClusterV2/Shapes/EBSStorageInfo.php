<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateClusterV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProvisionedThroughput $ProvisionedThroughput
 * @property int<1, 16384> $VolumeSize
 */
class EBSStorageInfo extends Shape
{
    /**
     * @param array{
     *     ProvisionedThroughput?: ProvisionedThroughput,
     *     VolumeSize?: int<1, 16384>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
