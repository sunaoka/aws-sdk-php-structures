<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeOrderableDBInstanceOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Engine
 * @property string $EngineVersion
 * @property string $DBInstanceClass
 * @property string $LicenseModel
 * @property string $AvailabilityZoneGroup
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
 * @property list<AvailableProcessorFeature> $AvailableProcessorFeatures
 * @property list<string> $SupportedEngineModes
 * @property bool $SupportsStorageAutoscaling
 * @property bool $SupportsKerberosAuthentication
 * @property bool $OutpostCapable
 * @property list<string> $SupportedActivityStreamModes
 * @property bool $SupportsGlobalDatabases
 * @property bool $SupportsClusters
 * @property list<string> $SupportedNetworkTypes
 * @property bool $SupportsStorageThroughput
 * @property int $MinStorageThroughputPerDbInstance
 * @property int $MaxStorageThroughputPerDbInstance
 * @property double $MinStorageThroughputPerIops
 * @property double $MaxStorageThroughputPerIops
 * @property bool $SupportsDedicatedLogVolume
 */
class OrderableDBInstanceOption extends Shape
{
    /**
     * @param array{
     *     Engine?: string,
     *     EngineVersion?: string,
     *     DBInstanceClass?: string,
     *     LicenseModel?: string,
     *     AvailabilityZoneGroup?: string,
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
     *     AvailableProcessorFeatures?: list<AvailableProcessorFeature>,
     *     SupportedEngineModes?: list<string>,
     *     SupportsStorageAutoscaling?: bool,
     *     SupportsKerberosAuthentication?: bool,
     *     OutpostCapable?: bool,
     *     SupportedActivityStreamModes?: list<string>,
     *     SupportsGlobalDatabases?: bool,
     *     SupportsClusters?: bool,
     *     SupportedNetworkTypes?: list<string>,
     *     SupportsStorageThroughput?: bool,
     *     MinStorageThroughputPerDbInstance?: int,
     *     MaxStorageThroughputPerDbInstance?: int,
     *     MinStorageThroughputPerIops?: double,
     *     MaxStorageThroughputPerIops?: double,
     *     SupportsDedicatedLogVolume?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
