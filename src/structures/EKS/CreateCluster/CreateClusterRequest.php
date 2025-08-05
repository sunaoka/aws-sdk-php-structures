<?php

namespace Sunaoka\Aws\Structures\EKS\CreateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $version
 * @property string $roleArn
 * @property Shapes\VpcConfigRequest $resourcesVpcConfig
 * @property Shapes\KubernetesNetworkConfigRequest|null $kubernetesNetworkConfig
 * @property Shapes\Logging|null $logging
 * @property string|null $clientRequestToken
 * @property array<string, string>|null $tags
 * @property list<Shapes\EncryptionConfig>|null $encryptionConfig
 * @property Shapes\OutpostConfigRequest|null $outpostConfig
 * @property Shapes\CreateAccessConfigRequest|null $accessConfig
 * @property bool|null $bootstrapSelfManagedAddons
 * @property Shapes\UpgradePolicyRequest|null $upgradePolicy
 * @property Shapes\ZonalShiftConfigRequest|null $zonalShiftConfig
 * @property Shapes\RemoteNetworkConfigRequest|null $remoteNetworkConfig
 * @property Shapes\ComputeConfigRequest|null $computeConfig
 * @property Shapes\StorageConfigRequest|null $storageConfig
 * @property bool|null $deletionProtection
 */
class CreateClusterRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     version?: string|null,
     *     roleArn: string,
     *     resourcesVpcConfig: Shapes\VpcConfigRequest,
     *     kubernetesNetworkConfig?: Shapes\KubernetesNetworkConfigRequest|null,
     *     logging?: Shapes\Logging|null,
     *     clientRequestToken?: string|null,
     *     tags?: array<string, string>|null,
     *     encryptionConfig?: list<Shapes\EncryptionConfig>|null,
     *     outpostConfig?: Shapes\OutpostConfigRequest|null,
     *     accessConfig?: Shapes\CreateAccessConfigRequest|null,
     *     bootstrapSelfManagedAddons?: bool|null,
     *     upgradePolicy?: Shapes\UpgradePolicyRequest|null,
     *     zonalShiftConfig?: Shapes\ZonalShiftConfigRequest|null,
     *     remoteNetworkConfig?: Shapes\RemoteNetworkConfigRequest|null,
     *     computeConfig?: Shapes\ComputeConfigRequest|null,
     *     storageConfig?: Shapes\StorageConfigRequest|null,
     *     deletionProtection?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
