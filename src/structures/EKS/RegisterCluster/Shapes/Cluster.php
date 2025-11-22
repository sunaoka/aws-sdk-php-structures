<?php

namespace Sunaoka\Aws\Structures\EKS\RegisterCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $version
 * @property string|null $endpoint
 * @property string|null $roleArn
 * @property VpcConfigResponse|null $resourcesVpcConfig
 * @property KubernetesNetworkConfigResponse|null $kubernetesNetworkConfig
 * @property Logging|null $logging
 * @property Identity|null $identity
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING'|'PENDING'|null $status
 * @property Certificate|null $certificateAuthority
 * @property string|null $clientRequestToken
 * @property string|null $platformVersion
 * @property array<string, string>|null $tags
 * @property list<EncryptionConfig>|null $encryptionConfig
 * @property ConnectorConfigResponse|null $connectorConfig
 * @property string|null $id
 * @property ClusterHealth|null $health
 * @property OutpostConfigResponse|null $outpostConfig
 * @property AccessConfigResponse|null $accessConfig
 * @property UpgradePolicyResponse|null $upgradePolicy
 * @property ZonalShiftConfigResponse|null $zonalShiftConfig
 * @property RemoteNetworkConfigResponse|null $remoteNetworkConfig
 * @property ComputeConfigResponse|null $computeConfig
 * @property StorageConfigResponse|null $storageConfig
 * @property bool|null $deletionProtection
 * @property ControlPlaneScalingConfig|null $controlPlaneScalingConfig
 */
class Cluster extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     arn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     version?: string|null,
     *     endpoint?: string|null,
     *     roleArn?: string|null,
     *     resourcesVpcConfig?: VpcConfigResponse|null,
     *     kubernetesNetworkConfig?: KubernetesNetworkConfigResponse|null,
     *     logging?: Logging|null,
     *     identity?: Identity|null,
     *     status?: 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING'|'PENDING'|null,
     *     certificateAuthority?: Certificate|null,
     *     clientRequestToken?: string|null,
     *     platformVersion?: string|null,
     *     tags?: array<string, string>|null,
     *     encryptionConfig?: list<EncryptionConfig>|null,
     *     connectorConfig?: ConnectorConfigResponse|null,
     *     id?: string|null,
     *     health?: ClusterHealth|null,
     *     outpostConfig?: OutpostConfigResponse|null,
     *     accessConfig?: AccessConfigResponse|null,
     *     upgradePolicy?: UpgradePolicyResponse|null,
     *     zonalShiftConfig?: ZonalShiftConfigResponse|null,
     *     remoteNetworkConfig?: RemoteNetworkConfigResponse|null,
     *     computeConfig?: ComputeConfigResponse|null,
     *     storageConfig?: StorageConfigResponse|null,
     *     deletionProtection?: bool|null,
     *     controlPlaneScalingConfig?: ControlPlaneScalingConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
