<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProvisionedThroughput $ProvisionedThroughput
 * @property int $VolumeSize
 */
class EBSStorageInfo extends Shape
{
    /**
     * @param array{
     *     ProvisionedThroughput?: ProvisionedThroughput,
     *     VolumeSize?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
