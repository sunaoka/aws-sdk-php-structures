<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeStorageSystemResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<NetAppONTAPSVM>|null $NetAppONTAPSVMs
 * @property list<NetAppONTAPVolume>|null $NetAppONTAPVolumes
 * @property list<NetAppONTAPCluster>|null $NetAppONTAPClusters
 */
class ResourceDetails extends Shape
{
    /**
     * @param array{
     *     NetAppONTAPSVMs?: list<NetAppONTAPSVM>|null,
     *     NetAppONTAPVolumes?: list<NetAppONTAPVolume>|null,
     *     NetAppONTAPClusters?: list<NetAppONTAPCluster>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
