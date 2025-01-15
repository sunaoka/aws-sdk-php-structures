<?php

namespace Sunaoka\Aws\Structures\Neptune\DescribeOrderableDBInstanceOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property string|null $DBInstanceClass
 * @property string|null $LicenseModel
 * @property list<AvailabilityZone>|null $AvailabilityZones
 * @property bool|null $MultiAZCapable
 * @property bool|null $ReadReplicaCapable
 * @property bool|null $Vpc
 * @property bool|null $SupportsStorageEncryption
 * @property string|null $StorageType
 * @property bool|null $SupportsIops
 * @property bool|null $SupportsEnhancedMonitoring
 * @property bool|null $SupportsIAMDatabaseAuthentication
 * @property bool|null $SupportsPerformanceInsights
 * @property int|null $MinStorageSize
 * @property int|null $MaxStorageSize
 * @property int|null $MinIopsPerDbInstance
 * @property int|null $MaxIopsPerDbInstance
 * @property double|null $MinIopsPerGib
 * @property double|null $MaxIopsPerGib
 * @property bool|null $SupportsGlobalDatabases
 */
class OrderableDBInstanceOption extends Shape
{
    /**
     * @param array{
     *     Engine?: string|null,
     *     EngineVersion?: string|null,
     *     DBInstanceClass?: string|null,
     *     LicenseModel?: string|null,
     *     AvailabilityZones?: list<AvailabilityZone>|null,
     *     MultiAZCapable?: bool|null,
     *     ReadReplicaCapable?: bool|null,
     *     Vpc?: bool|null,
     *     SupportsStorageEncryption?: bool|null,
     *     StorageType?: string|null,
     *     SupportsIops?: bool|null,
     *     SupportsEnhancedMonitoring?: bool|null,
     *     SupportsIAMDatabaseAuthentication?: bool|null,
     *     SupportsPerformanceInsights?: bool|null,
     *     MinStorageSize?: int|null,
     *     MaxStorageSize?: int|null,
     *     MinIopsPerDbInstance?: int|null,
     *     MaxIopsPerDbInstance?: int|null,
     *     MinIopsPerGib?: double|null,
     *     MaxIopsPerGib?: double|null,
     *     SupportsGlobalDatabases?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
