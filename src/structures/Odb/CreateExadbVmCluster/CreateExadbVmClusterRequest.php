<?php

namespace Sunaoka\Aws\Structures\Odb\CreateExadbVmCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $displayName
 * @property int<0, max> $enabledEcpuCount
 * @property string $exascaleDbStorageVaultId
 * @property string $gridImageId
 * @property string $hostname
 * @property int<1, max> $nodeCount
 * @property string $odbNetworkId
 * @property string $shape
 * @property list<string> $sshPublicKeys
 * @property int<2, max> $totalEcpuCount
 * @property int<0, max> $vmFileSystemStorageTotalSizeInGBs
 * @property string|null $clusterName
 * @property Shapes\DataCollectionOptions|null $dataCollectionOptions
 * @property 'BRING_YOUR_OWN_LICENSE'|'LICENSE_INCLUDED'|null $licenseModel
 * @property int<1024, 8999>|null $scanListenerPortTcp
 * @property int<1024, 8999>|null $scanListenerPortTcpSsl
 * @property 'SMART_STORAGE'|'BLOCK_STORAGE'|null $shapeAttribute
 * @property string|null $systemVersion
 * @property array<string, string>|null $tags
 * @property string|null $timeZone
 * @property string|null $clientToken
 */
class CreateExadbVmClusterRequest extends Request
{
    /**
     * @param array{
     *     displayName: string,
     *     enabledEcpuCount: int<0, max>,
     *     exascaleDbStorageVaultId: string,
     *     gridImageId: string,
     *     hostname: string,
     *     nodeCount: int<1, max>,
     *     odbNetworkId: string,
     *     shape: string,
     *     sshPublicKeys: list<string>,
     *     totalEcpuCount: int<2, max>,
     *     vmFileSystemStorageTotalSizeInGBs: int<0, max>,
     *     clusterName?: string|null,
     *     dataCollectionOptions?: Shapes\DataCollectionOptions|null,
     *     licenseModel?: 'BRING_YOUR_OWN_LICENSE'|'LICENSE_INCLUDED'|null,
     *     scanListenerPortTcp?: int<1024, 8999>|null,
     *     scanListenerPortTcpSsl?: int<1024, 8999>|null,
     *     shapeAttribute?: 'SMART_STORAGE'|'BLOCK_STORAGE'|null,
     *     systemVersion?: string|null,
     *     tags?: array<string, string>|null,
     *     timeZone?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
