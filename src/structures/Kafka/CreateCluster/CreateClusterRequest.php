<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\BrokerNodeGroupInfo $BrokerNodeGroupInfo
 * @property Shapes\ClientAuthentication $ClientAuthentication
 * @property string $ClusterName
 * @property Shapes\ConfigurationInfo $ConfigurationInfo
 * @property Shapes\EncryptionInfo $EncryptionInfo
 * @property 'DEFAULT'|'PER_BROKER'|'PER_TOPIC_PER_BROKER'|'PER_TOPIC_PER_PARTITION' $EnhancedMonitoring
 * @property string $KafkaVersion
 * @property Shapes\LoggingInfo $LoggingInfo
 * @property int $NumberOfBrokerNodes
 * @property Shapes\OpenMonitoringInfo $OpenMonitoring
 * @property array<string, string> $Tags
 * @property 'LOCAL'|'TIERED' $StorageMode
 */
class CreateClusterRequest extends Request
{
    /**
     * @param array{
     *     BrokerNodeGroupInfo: Shapes\BrokerNodeGroupInfo,
     *     ClientAuthentication?: Shapes\ClientAuthentication,
     *     ClusterName: string,
     *     ConfigurationInfo?: Shapes\ConfigurationInfo,
     *     EncryptionInfo?: Shapes\EncryptionInfo,
     *     EnhancedMonitoring?: 'DEFAULT'|'PER_BROKER'|'PER_TOPIC_PER_BROKER'|'PER_TOPIC_PER_PARTITION',
     *     KafkaVersion: string,
     *     LoggingInfo?: Shapes\LoggingInfo,
     *     NumberOfBrokerNodes: int,
     *     OpenMonitoring?: Shapes\OpenMonitoringInfo,
     *     Tags?: array<string, string>,
     *     StorageMode?: 'LOCAL'|'TIERED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
