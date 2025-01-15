<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateClusterV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BrokerNodeGroupInfo $BrokerNodeGroupInfo
 * @property ClientAuthentication|null $ClientAuthentication
 * @property ConfigurationInfo|null $ConfigurationInfo
 * @property EncryptionInfo|null $EncryptionInfo
 * @property 'DEFAULT'|'PER_BROKER'|'PER_TOPIC_PER_BROKER'|'PER_TOPIC_PER_PARTITION'|null $EnhancedMonitoring
 * @property OpenMonitoringInfo|null $OpenMonitoring
 * @property string $KafkaVersion
 * @property LoggingInfo|null $LoggingInfo
 * @property int<1, 15> $NumberOfBrokerNodes
 * @property 'LOCAL'|'TIERED'|null $StorageMode
 */
class ProvisionedRequest extends Shape
{
    /**
     * @param array{
     *     BrokerNodeGroupInfo: BrokerNodeGroupInfo,
     *     ClientAuthentication?: ClientAuthentication|null,
     *     ConfigurationInfo?: ConfigurationInfo|null,
     *     EncryptionInfo?: EncryptionInfo|null,
     *     EnhancedMonitoring?: 'DEFAULT'|'PER_BROKER'|'PER_TOPIC_PER_BROKER'|'PER_TOPIC_PER_PARTITION'|null,
     *     OpenMonitoring?: OpenMonitoringInfo|null,
     *     KafkaVersion: string,
     *     LoggingInfo?: LoggingInfo|null,
     *     NumberOfBrokerNodes: int<1, 15>,
     *     StorageMode?: 'LOCAL'|'TIERED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
