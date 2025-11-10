<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\BrokerNodeGroupInfo $BrokerNodeGroupInfo
 * @property Shapes\ClientAuthentication|null $ClientAuthentication
 * @property string $ClusterName
 * @property Shapes\ConfigurationInfo|null $ConfigurationInfo
 * @property Shapes\EncryptionInfo|null $EncryptionInfo
 * @property 'DEFAULT'|'PER_BROKER'|'PER_TOPIC_PER_BROKER'|'PER_TOPIC_PER_PARTITION'|null $EnhancedMonitoring
 * @property string $KafkaVersion
 * @property Shapes\LoggingInfo|null $LoggingInfo
 * @property int<1, 15> $NumberOfBrokerNodes
 * @property Shapes\OpenMonitoringInfo|null $OpenMonitoring
 * @property array<string, string>|null $Tags
 * @property Shapes\Rebalancing|null $Rebalancing
 * @property 'LOCAL'|'TIERED'|null $StorageMode
 */
class CreateClusterRequest extends Request
{
    /**
     * @param array{
     *     BrokerNodeGroupInfo: Shapes\BrokerNodeGroupInfo,
     *     ClientAuthentication?: Shapes\ClientAuthentication|null,
     *     ClusterName: string,
     *     ConfigurationInfo?: Shapes\ConfigurationInfo|null,
     *     EncryptionInfo?: Shapes\EncryptionInfo|null,
     *     EnhancedMonitoring?: 'DEFAULT'|'PER_BROKER'|'PER_TOPIC_PER_BROKER'|'PER_TOPIC_PER_PARTITION'|null,
     *     KafkaVersion: string,
     *     LoggingInfo?: Shapes\LoggingInfo|null,
     *     NumberOfBrokerNodes: int<1, 15>,
     *     OpenMonitoring?: Shapes\OpenMonitoringInfo|null,
     *     Tags?: array<string, string>|null,
     *     Rebalancing?: Shapes\Rebalancing|null,
     *     StorageMode?: 'LOCAL'|'TIERED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
