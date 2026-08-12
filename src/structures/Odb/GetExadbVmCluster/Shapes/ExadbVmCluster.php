<?php

namespace Sunaoka\Aws\Structures\Odb\GetExadbVmCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $exadbVmClusterId
 * @property string|null $clusterName
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property DataCollectionOptions|null $dataCollectionOptions
 * @property string|null $displayName
 * @property string|null $domain
 * @property int|null $enabledEcpuCount
 * @property string|null $exadbVmClusterArn
 * @property string|null $exascaleDbStorageVaultArn
 * @property string|null $exascaleDbStorageVaultId
 * @property string|null $giVersion
 * @property string|null $gridImageId
 * @property 'RELEASE_UPDATE'|'CUSTOM_IMAGE'|null $gridImageType
 * @property string|null $hostname
 * @property list<IamRole>|null $iamRoles
 * @property ExadataIormConfig|null $iormConfigCache
 * @property string|null $lastUpdateHistoryEntryId
 * @property 'BRING_YOUR_OWN_LICENSE'|'LICENSE_INCLUDED'|null $licenseModel
 * @property int|null $listenerPort
 * @property int|null $memorySizeInGBs
 * @property int|null $nodeCount
 * @property string|null $ocid
 * @property string|null $ociResourceAnchorName
 * @property string|null $ociUrl
 * @property string|null $odbNetworkArn
 * @property string|null $odbNetworkId
 * @property float|null $percentProgress
 * @property string|null $scanDnsName
 * @property string|null $scanDnsRecordId
 * @property list<string>|null $scanIpIds
 * @property int|null $scanListenerPortTcp
 * @property int|null $scanListenerPortTcpSsl
 * @property string|null $shape
 * @property 'SMART_STORAGE'|'BLOCK_STORAGE'|null $shapeAttribute
 * @property ExadbVmClusterStorageDetails|null $snapshotFileSystemStorage
 * @property list<string>|null $sshPublicKeys
 * @property 'AVAILABLE'|'FAILED'|'PROVISIONING'|'TERMINATED'|'TERMINATING'|'UPDATING'|'MAINTENANCE_IN_PROGRESS'|null $status
 * @property string|null $statusReason
 * @property string|null $systemVersion
 * @property string|null $timeZone
 * @property int|null $totalEcpuCount
 * @property ExadbVmClusterStorageDetails|null $totalFileSystemStorage
 * @property list<string>|null $vipIds
 * @property ExadbVmClusterStorageDetails|null $vmFileSystemStorage
 */
class ExadbVmCluster extends Shape
{
    /**
     * @param array{
     *     exadbVmClusterId: string,
     *     clusterName?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     dataCollectionOptions?: DataCollectionOptions|null,
     *     displayName?: string|null,
     *     domain?: string|null,
     *     enabledEcpuCount?: int|null,
     *     exadbVmClusterArn?: string|null,
     *     exascaleDbStorageVaultArn?: string|null,
     *     exascaleDbStorageVaultId?: string|null,
     *     giVersion?: string|null,
     *     gridImageId?: string|null,
     *     gridImageType?: 'RELEASE_UPDATE'|'CUSTOM_IMAGE'|null,
     *     hostname?: string|null,
     *     iamRoles?: list<IamRole>|null,
     *     iormConfigCache?: ExadataIormConfig|null,
     *     lastUpdateHistoryEntryId?: string|null,
     *     licenseModel?: 'BRING_YOUR_OWN_LICENSE'|'LICENSE_INCLUDED'|null,
     *     listenerPort?: int|null,
     *     memorySizeInGBs?: int|null,
     *     nodeCount?: int|null,
     *     ocid?: string|null,
     *     ociResourceAnchorName?: string|null,
     *     ociUrl?: string|null,
     *     odbNetworkArn?: string|null,
     *     odbNetworkId?: string|null,
     *     percentProgress?: float|null,
     *     scanDnsName?: string|null,
     *     scanDnsRecordId?: string|null,
     *     scanIpIds?: list<string>|null,
     *     scanListenerPortTcp?: int|null,
     *     scanListenerPortTcpSsl?: int|null,
     *     shape?: string|null,
     *     shapeAttribute?: 'SMART_STORAGE'|'BLOCK_STORAGE'|null,
     *     snapshotFileSystemStorage?: ExadbVmClusterStorageDetails|null,
     *     sshPublicKeys?: list<string>|null,
     *     status?: 'AVAILABLE'|'FAILED'|'PROVISIONING'|'TERMINATED'|'TERMINATING'|'UPDATING'|'MAINTENANCE_IN_PROGRESS'|null,
     *     statusReason?: string|null,
     *     systemVersion?: string|null,
     *     timeZone?: string|null,
     *     totalEcpuCount?: int|null,
     *     totalFileSystemStorage?: ExadbVmClusterStorageDetails|null,
     *     vipIds?: list<string>|null,
     *     vmFileSystemStorage?: ExadbVmClusterStorageDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
