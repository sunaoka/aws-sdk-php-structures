<?php

namespace Sunaoka\Aws\Structures\Odb\UpdateExadbVmCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $exadbVmClusterId
 * @property Shapes\DataCollectionOptions|null $dataCollectionOptions
 * @property string|null $displayName
 * @property int<0, max>|null $enabledEcpuCount
 * @property string|null $gridImageId
 * @property 'BRING_YOUR_OWN_LICENSE'|'LICENSE_INCLUDED'|null $licenseModel
 * @property list<string>|null $sshPublicKeys
 * @property string|null $systemVersion
 * @property int<2, max>|null $totalEcpuCount
 * @property 'ROLLING_APPLY'|'NON_ROLLING_APPLY'|'PRECHECK'|'ROLLBACK'|null $updateAction
 * @property int<0, max>|null $vmFileSystemStorageTotalSizeInGBs
 */
class UpdateExadbVmClusterRequest extends Request
{
    /**
     * @param array{
     *     exadbVmClusterId: string,
     *     dataCollectionOptions?: Shapes\DataCollectionOptions|null,
     *     displayName?: string|null,
     *     enabledEcpuCount?: int<0, max>|null,
     *     gridImageId?: string|null,
     *     licenseModel?: 'BRING_YOUR_OWN_LICENSE'|'LICENSE_INCLUDED'|null,
     *     sshPublicKeys?: list<string>|null,
     *     systemVersion?: string|null,
     *     totalEcpuCount?: int<2, max>|null,
     *     updateAction?: 'ROLLING_APPLY'|'NON_ROLLING_APPLY'|'PRECHECK'|'ROLLBACK'|null,
     *     vmFileSystemStorageTotalSizeInGBs?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
