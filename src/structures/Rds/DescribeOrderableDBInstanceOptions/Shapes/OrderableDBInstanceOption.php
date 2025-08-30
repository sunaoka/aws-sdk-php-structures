<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeOrderableDBInstanceOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property string|null $DBInstanceClass
 * @property string|null $LicenseModel
 * @property string|null $AvailabilityZoneGroup
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
 * @property list<AvailableProcessorFeature>|null $AvailableProcessorFeatures
 * @property list<string>|null $SupportedEngineModes
 * @property bool|null $SupportsStorageAutoscaling
 * @property bool|null $SupportsKerberosAuthentication
 * @property bool|null $OutpostCapable
 * @property list<string>|null $SupportedActivityStreamModes
 * @property bool|null $SupportsGlobalDatabases
 * @property bool|null $SupportsClusters
 * @property list<string>|null $SupportedNetworkTypes
 * @property bool|null $SupportsStorageThroughput
 * @property int|null $MinStorageThroughputPerDbInstance
 * @property int|null $MaxStorageThroughputPerDbInstance
 * @property double|null $MinStorageThroughputPerIops
 * @property double|null $MaxStorageThroughputPerIops
 * @property bool|null $SupportsDedicatedLogVolume
 * @property bool|null $SupportsHttpEndpoint
 */
class OrderableDBInstanceOption extends Shape
{
    /**
     * @param array{
     *     Engine?: string|null,
     *     EngineVersion?: string|null,
     *     DBInstanceClass?: string|null,
     *     LicenseModel?: string|null,
     *     AvailabilityZoneGroup?: string|null,
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
     *     AvailableProcessorFeatures?: list<AvailableProcessorFeature>|null,
     *     SupportedEngineModes?: list<string>|null,
     *     SupportsStorageAutoscaling?: bool|null,
     *     SupportsKerberosAuthentication?: bool|null,
     *     OutpostCapable?: bool|null,
     *     SupportedActivityStreamModes?: list<string>|null,
     *     SupportsGlobalDatabases?: bool|null,
     *     SupportsClusters?: bool|null,
     *     SupportedNetworkTypes?: list<string>|null,
     *     SupportsStorageThroughput?: bool|null,
     *     MinStorageThroughputPerDbInstance?: int|null,
     *     MaxStorageThroughputPerDbInstance?: int|null,
     *     MinStorageThroughputPerIops?: double|null,
     *     MaxStorageThroughputPerIops?: double|null,
     *     SupportsDedicatedLogVolume?: bool|null,
     *     SupportsHttpEndpoint?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
