<?php

namespace Sunaoka\Aws\Structures\EKS\UpdateClusterConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property Shapes\VpcConfigRequest $resourcesVpcConfig
 * @property Shapes\Logging $logging
 * @property string $clientRequestToken
 * @property Shapes\UpdateAccessConfigRequest $accessConfig
 * @property Shapes\UpgradePolicyRequest $upgradePolicy
 * @property Shapes\ZonalShiftConfigRequest $zonalShiftConfig
 * @property Shapes\ComputeConfigRequest $computeConfig
 * @property Shapes\KubernetesNetworkConfigRequest $kubernetesNetworkConfig
 * @property Shapes\StorageConfigRequest $storageConfig
 */
class UpdateClusterConfigRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     resourcesVpcConfig?: Shapes\VpcConfigRequest,
     *     logging?: Shapes\Logging,
     *     clientRequestToken?: string,
     *     accessConfig?: Shapes\UpdateAccessConfigRequest,
     *     upgradePolicy?: Shapes\UpgradePolicyRequest,
     *     zonalShiftConfig?: Shapes\ZonalShiftConfigRequest,
     *     computeConfig?: Shapes\ComputeConfigRequest,
     *     kubernetesNetworkConfig?: Shapes\KubernetesNetworkConfigRequest,
     *     storageConfig?: Shapes\StorageConfigRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
