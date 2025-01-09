<?php

namespace Sunaoka\Aws\Structures\EKS\CreateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $version
 * @property string $roleArn
 * @property Shapes\VpcConfigRequest $resourcesVpcConfig
 * @property Shapes\KubernetesNetworkConfigRequest $kubernetesNetworkConfig
 * @property Shapes\Logging $logging
 * @property string $clientRequestToken
 * @property array<string, string> $tags
 * @property list<Shapes\EncryptionConfig> $encryptionConfig
 * @property Shapes\OutpostConfigRequest $outpostConfig
 * @property Shapes\CreateAccessConfigRequest $accessConfig
 * @property bool $bootstrapSelfManagedAddons
 * @property Shapes\UpgradePolicyRequest $upgradePolicy
 * @property Shapes\ZonalShiftConfigRequest $zonalShiftConfig
 * @property Shapes\RemoteNetworkConfigRequest $remoteNetworkConfig
 * @property Shapes\ComputeConfigRequest $computeConfig
 * @property Shapes\StorageConfigRequest $storageConfig
 */
class CreateClusterRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     version?: string,
     *     roleArn: string,
     *     resourcesVpcConfig: Shapes\VpcConfigRequest,
     *     kubernetesNetworkConfig?: Shapes\KubernetesNetworkConfigRequest,
     *     logging?: Shapes\Logging,
     *     clientRequestToken?: string,
     *     tags?: array<string, string>,
     *     encryptionConfig?: list<Shapes\EncryptionConfig>,
     *     outpostConfig?: Shapes\OutpostConfigRequest,
     *     accessConfig?: Shapes\CreateAccessConfigRequest,
     *     bootstrapSelfManagedAddons?: bool,
     *     upgradePolicy?: Shapes\UpgradePolicyRequest,
     *     zonalShiftConfig?: Shapes\ZonalShiftConfigRequest,
     *     remoteNetworkConfig?: Shapes\RemoteNetworkConfigRequest,
     *     computeConfig?: Shapes\ComputeConfigRequest,
     *     storageConfig?: Shapes\StorageConfigRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
