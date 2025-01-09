<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeOrderableReplicationInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EngineVersion
 * @property string $ReplicationInstanceClass
 * @property string $StorageType
 * @property int $MinAllocatedStorage
 * @property int $MaxAllocatedStorage
 * @property int $DefaultAllocatedStorage
 * @property int $IncludedAllocatedStorage
 * @property list<string> $AvailabilityZones
 * @property 'beta'|'prod' $ReleaseStatus
 */
class OrderableReplicationInstance extends Shape
{
    /**
     * @param array{
     *     EngineVersion?: string,
     *     ReplicationInstanceClass?: string,
     *     StorageType?: string,
     *     MinAllocatedStorage?: int,
     *     MaxAllocatedStorage?: int,
     *     DefaultAllocatedStorage?: int,
     *     IncludedAllocatedStorage?: int,
     *     AvailabilityZones?: list<string>,
     *     ReleaseStatus?: 'beta'|'prod'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
