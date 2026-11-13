<?php

namespace Sunaoka\Aws\Structures\Odb\UpdateCloudVmCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cloudVmClusterId
 * @property int<0, max>|null $cpuCoreCount
 * @property Shapes\DataCollectionOptions|null $dataCollectionOptions
 * @property double|null $dataStorageSizeInTBs
 * @property int<0, max>|null $dbNodeStorageSizeInGBs
 * @property string|null $displayName
 * @property list<string>|null $sshPublicKeys
 * @property 'BRING_YOUR_OWN_LICENSE'|'LICENSE_INCLUDED'|null $licenseModel
 * @property int<0, max>|null $memorySizeInGBs
 * @property int<0, max>|null $storageSizeInGBs
 */
class UpdateCloudVmClusterRequest extends Request
{
    /**
     * @param array{
     *     cloudVmClusterId: string,
     *     cpuCoreCount?: int<0, max>|null,
     *     dataCollectionOptions?: Shapes\DataCollectionOptions|null,
     *     dataStorageSizeInTBs?: double|null,
     *     dbNodeStorageSizeInGBs?: int<0, max>|null,
     *     displayName?: string|null,
     *     sshPublicKeys?: list<string>|null,
     *     licenseModel?: 'BRING_YOUR_OWN_LICENSE'|'LICENSE_INCLUDED'|null,
     *     memorySizeInGBs?: int<0, max>|null,
     *     storageSizeInGBs?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
