<?php

namespace Sunaoka\Aws\Structures\Odb\CreateCloudVmCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cloudExadataInfrastructureId
 * @property int<0, 368> $cpuCoreCount
 * @property string $displayName
 * @property string $giVersion
 * @property string $hostname
 * @property list<string> $sshPublicKeys
 * @property string $odbNetworkId
 * @property string|null $clusterName
 * @property Shapes\DataCollectionOptions|null $dataCollectionOptions
 * @property double|null $dataStorageSizeInTBs
 * @property int|null $dbNodeStorageSizeInGBs
 * @property list<string>|null $dbServers
 * @property array<string, string>|null $tags
 * @property bool|null $isLocalBackupEnabled
 * @property bool|null $isSparseDiskgroupEnabled
 * @property 'BRING_YOUR_OWN_LICENSE'|'LICENSE_INCLUDED'|null $licenseModel
 * @property int|null $memorySizeInGBs
 * @property string|null $systemVersion
 * @property string|null $timeZone
 * @property string|null $clientToken
 * @property int<1024, 8999>|null $scanListenerPortTcp
 */
class CreateCloudVmClusterRequest extends Request
{
    /**
     * @param array{
     *     cloudExadataInfrastructureId: string,
     *     cpuCoreCount: int<0, 368>,
     *     displayName: string,
     *     giVersion: string,
     *     hostname: string,
     *     sshPublicKeys: list<string>,
     *     odbNetworkId: string,
     *     clusterName?: string|null,
     *     dataCollectionOptions?: Shapes\DataCollectionOptions|null,
     *     dataStorageSizeInTBs?: double|null,
     *     dbNodeStorageSizeInGBs?: int|null,
     *     dbServers?: list<string>|null,
     *     tags?: array<string, string>|null,
     *     isLocalBackupEnabled?: bool|null,
     *     isSparseDiskgroupEnabled?: bool|null,
     *     licenseModel?: 'BRING_YOUR_OWN_LICENSE'|'LICENSE_INCLUDED'|null,
     *     memorySizeInGBs?: int|null,
     *     systemVersion?: string|null,
     *     timeZone?: string|null,
     *     clientToken?: string|null,
     *     scanListenerPortTcp?: int<1024, 8999>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
