<?php

namespace Sunaoka\Aws\Structures\Neptune\DescribeOrderableDBInstanceOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Engine
 * @property string $EngineVersion
 * @property string $DBInstanceClass
 * @property string $LicenseModel
 * @property list<AvailabilityZone> $AvailabilityZones
 * @property bool $MultiAZCapable
 * @property bool $ReadReplicaCapable
 * @property bool $Vpc
 * @property bool $SupportsStorageEncryption
 * @property string $StorageType
 * @property bool $SupportsIops
 * @property bool $SupportsEnhancedMonitoring
 * @property bool $SupportsIAMDatabaseAuthentication
 * @property bool $SupportsPerformanceInsights
 * @property int $MinStorageSize
 * @property int $MaxStorageSize
 * @property int $MinIopsPerDbInstance
 * @property int $MaxIopsPerDbInstance
 * @property double $MinIopsPerGib
 * @property double $MaxIopsPerGib
 * @property bool $SupportsGlobalDatabases
 */
class OrderableDBInstanceOption extends Shape
{
    /**
     * @param array{
     *     Engine?: string,
     *     EngineVersion?: string,
     *     DBInstanceClass?: string,
     *     LicenseModel?: string,
     *     AvailabilityZones?: list<AvailabilityZone>,
     *     MultiAZCapable?: bool,
     *     ReadReplicaCapable?: bool,
     *     Vpc?: bool,
     *     SupportsStorageEncryption?: bool,
     *     StorageType?: string,
     *     SupportsIops?: bool,
     *     SupportsEnhancedMonitoring?: bool,
     *     SupportsIAMDatabaseAuthentication?: bool,
     *     SupportsPerformanceInsights?: bool,
     *     MinStorageSize?: int,
     *     MaxStorageSize?: int,
     *     MinIopsPerDbInstance?: int,
     *     MaxIopsPerDbInstance?: int,
     *     MinIopsPerGib?: double,
     *     MaxIopsPerGib?: double,
     *     SupportsGlobalDatabases?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
