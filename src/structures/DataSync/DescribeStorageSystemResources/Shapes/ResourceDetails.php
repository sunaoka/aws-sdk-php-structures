<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystemResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<NetAppONTAPSVM> $NetAppONTAPSVMs
 * @property list<NetAppONTAPVolume> $NetAppONTAPVolumes
 * @property list<NetAppONTAPCluster> $NetAppONTAPClusters
 */
class ResourceDetails extends Shape
{
    /**
     * @param array{
     *     NetAppONTAPSVMs?: list<NetAppONTAPSVM>,
     *     NetAppONTAPVolumes?: list<NetAppONTAPVolume>,
     *     NetAppONTAPClusters?: list<NetAppONTAPCluster>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
