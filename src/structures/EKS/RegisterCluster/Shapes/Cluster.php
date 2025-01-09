<?php

namespace Sunaoka\Aws\Structures\EKS\RegisterCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $version
 * @property string $endpoint
 * @property string $roleArn
 * @property VpcConfigResponse $resourcesVpcConfig
 * @property KubernetesNetworkConfigResponse $kubernetesNetworkConfig
 * @property Logging $logging
 * @property Identity $identity
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING'|'PENDING' $status
 * @property Certificate $certificateAuthority
 * @property string $clientRequestToken
 * @property string $platformVersion
 * @property array<string, string> $tags
 * @property list<EncryptionConfig> $encryptionConfig
 * @property ConnectorConfigResponse $connectorConfig
 * @property string $id
 * @property ClusterHealth $health
 * @property OutpostConfigResponse $outpostConfig
 * @property AccessConfigResponse $accessConfig
 * @property UpgradePolicyResponse $upgradePolicy
 * @property ZonalShiftConfigResponse $zonalShiftConfig
 * @property RemoteNetworkConfigResponse $remoteNetworkConfig
 * @property ComputeConfigResponse $computeConfig
 * @property StorageConfigResponse $storageConfig
 */
class Cluster extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     arn?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     version?: string,
     *     endpoint?: string,
     *     roleArn?: string,
     *     resourcesVpcConfig?: VpcConfigResponse,
     *     kubernetesNetworkConfig?: KubernetesNetworkConfigResponse,
     *     logging?: Logging,
     *     identity?: Identity,
     *     status?: 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING'|'PENDING',
     *     certificateAuthority?: Certificate,
     *     clientRequestToken?: string,
     *     platformVersion?: string,
     *     tags?: array<string, string>,
     *     encryptionConfig?: list<EncryptionConfig>,
     *     connectorConfig?: ConnectorConfigResponse,
     *     id?: string,
     *     health?: ClusterHealth,
     *     outpostConfig?: OutpostConfigResponse,
     *     accessConfig?: AccessConfigResponse,
     *     upgradePolicy?: UpgradePolicyResponse,
     *     zonalShiftConfig?: ZonalShiftConfigResponse,
     *     remoteNetworkConfig?: RemoteNetworkConfigResponse,
     *     computeConfig?: ComputeConfigResponse,
     *     storageConfig?: StorageConfigResponse
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
