<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeOrderableReplicationInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EngineVersion
 * @property string|null $ReplicationInstanceClass
 * @property string|null $StorageType
 * @property int|null $MinAllocatedStorage
 * @property int|null $MaxAllocatedStorage
 * @property int|null $DefaultAllocatedStorage
 * @property int|null $IncludedAllocatedStorage
 * @property list<string>|null $AvailabilityZones
 * @property 'beta'|'prod'|null $ReleaseStatus
 */
class OrderableReplicationInstance extends Shape
{
    /**
     * @param array{
     *     EngineVersion?: string|null,
     *     ReplicationInstanceClass?: string|null,
     *     StorageType?: string|null,
     *     MinAllocatedStorage?: int|null,
     *     MaxAllocatedStorage?: int|null,
     *     DefaultAllocatedStorage?: int|null,
     *     IncludedAllocatedStorage?: int|null,
     *     AvailabilityZones?: list<string>|null,
     *     ReleaseStatus?: 'beta'|'prod'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
