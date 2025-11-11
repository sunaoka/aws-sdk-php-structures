<?php

namespace Sunaoka\Aws\Structures\Kafka;

class KafkaClient extends \Aws\Kafka\KafkaClient
{
    use BatchAssociateScramSecret\BatchAssociateScramSecretTrait;
    use CreateCluster\CreateClusterTrait;
    use CreateClusterV2\CreateClusterV2Trait;
    use CreateConfiguration\CreateConfigurationTrait;
    use CreateReplicator\CreateReplicatorTrait;
    use CreateVpcConnection\CreateVpcConnectionTrait;
    use DeleteCluster\DeleteClusterTrait;
    use DeleteConfiguration\DeleteConfigurationTrait;
    use DeleteReplicator\DeleteReplicatorTrait;
    use DeleteVpcConnection\DeleteVpcConnectionTrait;
    use DescribeCluster\DescribeClusterTrait;
    use DescribeClusterV2\DescribeClusterV2Trait;
    use DescribeClusterOperation\DescribeClusterOperationTrait;
    use DescribeClusterOperationV2\DescribeClusterOperationV2Trait;
    use DescribeConfiguration\DescribeConfigurationTrait;
    use DescribeConfigurationRevision\DescribeConfigurationRevisionTrait;
    use DescribeReplicator\DescribeReplicatorTrait;
    use DescribeVpcConnection\DescribeVpcConnectionTrait;
    use BatchDisassociateScramSecret\BatchDisassociateScramSecretTrait;
    use GetBootstrapBrokers\GetBootstrapBrokersTrait;
    use GetCompatibleKafkaVersions\GetCompatibleKafkaVersionsTrait;
    use ListClusterOperations\ListClusterOperationsTrait;
    use ListClusterOperationsV2\ListClusterOperationsV2Trait;
    use ListClusters\ListClustersTrait;
    use ListClustersV2\ListClustersV2Trait;
    use ListConfigurationRevisions\ListConfigurationRevisionsTrait;
    use ListConfigurations\ListConfigurationsTrait;
    use ListKafkaVersions\ListKafkaVersionsTrait;
    use ListNodes\ListNodesTrait;
    use ListReplicators\ListReplicatorsTrait;
    use ListScramSecrets\ListScramSecretsTrait;
    use ListTagsForResource\ListTagsForResourceTrait;
    use ListClientVpcConnections\ListClientVpcConnectionsTrait;
    use ListVpcConnections\ListVpcConnectionsTrait;
    use RejectClientVpcConnection\RejectClientVpcConnectionTrait;
    use DeleteClusterPolicy\DeleteClusterPolicyTrait;
    use GetClusterPolicy\GetClusterPolicyTrait;
    use PutClusterPolicy\PutClusterPolicyTrait;
    use RebootBroker\RebootBrokerTrait;
    use TagResource\TagResourceTrait;
    use UntagResource\UntagResourceTrait;
    use UpdateBrokerCount\UpdateBrokerCountTrait;
    use UpdateBrokerType\UpdateBrokerTypeTrait;
    use UpdateBrokerStorage\UpdateBrokerStorageTrait;
    use UpdateConfiguration\UpdateConfigurationTrait;
    use UpdateClusterConfiguration\UpdateClusterConfigurationTrait;
    use UpdateClusterKafkaVersion\UpdateClusterKafkaVersionTrait;
    use UpdateConnectivity\UpdateConnectivityTrait;
    use UpdateMonitoring\UpdateMonitoringTrait;
    use UpdateRebalancing\UpdateRebalancingTrait;
    use UpdateReplicationInfo\UpdateReplicationInfoTrait;
    use UpdateSecurity\UpdateSecurityTrait;
    use UpdateStorage\UpdateStorageTrait;
}
