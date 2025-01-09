<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateClusterV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BrokerNodeGroupInfo $BrokerNodeGroupInfo
 * @property ClientAuthentication $ClientAuthentication
 * @property ConfigurationInfo $ConfigurationInfo
 * @property EncryptionInfo $EncryptionInfo
 * @property 'DEFAULT'|'PER_BROKER'|'PER_TOPIC_PER_BROKER'|'PER_TOPIC_PER_PARTITION' $EnhancedMonitoring
 * @property OpenMonitoringInfo $OpenMonitoring
 * @property string $KafkaVersion
 * @property LoggingInfo $LoggingInfo
 * @property int<1, 15> $NumberOfBrokerNodes
 * @property 'LOCAL'|'TIERED' $StorageMode
 */
class ProvisionedRequest extends Shape
{
    /**
     * @param array{
     *     BrokerNodeGroupInfo: BrokerNodeGroupInfo,
     *     ClientAuthentication?: ClientAuthentication,
     *     ConfigurationInfo?: ConfigurationInfo,
     *     EncryptionInfo?: EncryptionInfo,
     *     EnhancedMonitoring?: 'DEFAULT'|'PER_BROKER'|'PER_TOPIC_PER_BROKER'|'PER_TOPIC_PER_PARTITION',
     *     OpenMonitoring?: OpenMonitoringInfo,
     *     KafkaVersion: string,
     *     LoggingInfo?: LoggingInfo,
     *     NumberOfBrokerNodes: int<1, 15>,
     *     StorageMode?: 'LOCAL'|'TIERED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
