<?php

namespace Sunaoka\Aws\Structures\Odb\GetCloudVmCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $cloudVmClusterId
 * @property string|null $displayName
 * @property 'AVAILABLE'|'FAILED'|'PROVISIONING'|'TERMINATED'|'TERMINATING'|'UPDATING'|'MAINTENANCE_IN_PROGRESS'|null $status
 * @property string|null $statusReason
 * @property string|null $cloudVmClusterArn
 * @property string|null $cloudExadataInfrastructureId
 * @property string|null $clusterName
 * @property int|null $cpuCoreCount
 * @property DataCollectionOptions|null $dataCollectionOptions
 * @property double|null $dataStorageSizeInTBs
 * @property int|null $dbNodeStorageSizeInGBs
 * @property list<string>|null $dbServers
 * @property 'HIGH'|'NORMAL'|null $diskRedundancy
 * @property string|null $giVersion
 * @property string|null $hostname
 * @property ExadataIormConfig|null $iormConfigCache
 * @property bool|null $isLocalBackupEnabled
 * @property bool|null $isSparseDiskgroupEnabled
 * @property string|null $lastUpdateHistoryEntryId
 * @property 'BRING_YOUR_OWN_LICENSE'|'LICENSE_INCLUDED'|null $licenseModel
 * @property int|null $listenerPort
 * @property int|null $memorySizeInGBs
 * @property int|null $nodeCount
 * @property string|null $ocid
 * @property string|null $ociResourceAnchorName
 * @property string|null $ociUrl
 * @property string|null $domain
 * @property string|null $scanDnsName
 * @property string|null $scanDnsRecordId
 * @property list<string>|null $scanIpIds
 * @property string|null $shape
 * @property list<string>|null $sshPublicKeys
 * @property int|null $storageSizeInGBs
 * @property string|null $systemVersion
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $timeZone
 * @property list<string>|null $vipIds
 * @property string|null $odbNetworkId
 * @property float|null $percentProgress
 * @property 'ECPU'|'OCPU'|null $computeModel
 */
class CloudVmCluster extends Shape
{
    /**
     * @param array{
     *     cloudVmClusterId: string,
     *     displayName?: string|null,
     *     status?: 'AVAILABLE'|'FAILED'|'PROVISIONING'|'TERMINATED'|'TERMINATING'|'UPDATING'|'MAINTENANCE_IN_PROGRESS'|null,
     *     statusReason?: string|null,
     *     cloudVmClusterArn?: string|null,
     *     cloudExadataInfrastructureId?: string|null,
     *     clusterName?: string|null,
     *     cpuCoreCount?: int|null,
     *     dataCollectionOptions?: DataCollectionOptions|null,
     *     dataStorageSizeInTBs?: double|null,
     *     dbNodeStorageSizeInGBs?: int|null,
     *     dbServers?: list<string>|null,
     *     diskRedundancy?: 'HIGH'|'NORMAL'|null,
     *     giVersion?: string|null,
     *     hostname?: string|null,
     *     iormConfigCache?: ExadataIormConfig|null,
     *     isLocalBackupEnabled?: bool|null,
     *     isSparseDiskgroupEnabled?: bool|null,
     *     lastUpdateHistoryEntryId?: string|null,
     *     licenseModel?: 'BRING_YOUR_OWN_LICENSE'|'LICENSE_INCLUDED'|null,
     *     listenerPort?: int|null,
     *     memorySizeInGBs?: int|null,
     *     nodeCount?: int|null,
     *     ocid?: string|null,
     *     ociResourceAnchorName?: string|null,
     *     ociUrl?: string|null,
     *     domain?: string|null,
     *     scanDnsName?: string|null,
     *     scanDnsRecordId?: string|null,
     *     scanIpIds?: list<string>|null,
     *     shape?: string|null,
     *     sshPublicKeys?: list<string>|null,
     *     storageSizeInGBs?: int|null,
     *     systemVersion?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     timeZone?: string|null,
     *     vipIds?: list<string>|null,
     *     odbNetworkId?: string|null,
     *     percentProgress?: float|null,
     *     computeModel?: 'ECPU'|'OCPU'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
