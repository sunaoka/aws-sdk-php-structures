<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<BrokerEBSVolumeInfo> $BrokerEBSVolumeInfo
 * @property ConfigurationInfo $ConfigurationInfo
 * @property int $NumberOfBrokerNodes
 * @property OpenMonitoring $OpenMonitoring
 * @property 'DEFAULT'|'PER_BROKER'|'PER_TOPIC_PER_BROKER'|'PER_TOPIC_PER_PARTITION' $EnhancedMonitoring
 * @property string $KafkaVersion
 * @property LoggingInfo $LoggingInfo
 * @property string $InstanceType
 * @property ClientAuthentication $ClientAuthentication
 * @property EncryptionInfo $EncryptionInfo
 * @property ConnectivityInfo $ConnectivityInfo
 * @property 'LOCAL'|'TIERED' $StorageMode
 * @property BrokerCountUpdateInfo $BrokerCountUpdateInfo
 */
class MutableClusterInfo extends Shape
{
    /**
     * @param array{
     *     BrokerEBSVolumeInfo?: list<BrokerEBSVolumeInfo>,
     *     ConfigurationInfo?: ConfigurationInfo,
     *     NumberOfBrokerNodes?: int,
     *     OpenMonitoring?: OpenMonitoring,
     *     EnhancedMonitoring?: 'DEFAULT'|'PER_BROKER'|'PER_TOPIC_PER_BROKER'|'PER_TOPIC_PER_PARTITION',
     *     KafkaVersion?: string,
     *     LoggingInfo?: LoggingInfo,
     *     InstanceType?: string,
     *     ClientAuthentication?: ClientAuthentication,
     *     EncryptionInfo?: EncryptionInfo,
     *     ConnectivityInfo?: ConnectivityInfo,
     *     StorageMode?: 'LOCAL'|'TIERED',
     *     BrokerCountUpdateInfo?: BrokerCountUpdateInfo
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
