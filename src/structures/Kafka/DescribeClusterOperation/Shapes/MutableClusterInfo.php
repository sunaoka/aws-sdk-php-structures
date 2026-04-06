<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<BrokerEBSVolumeInfo>|null $BrokerEBSVolumeInfo
 * @property ConfigurationInfo|null $ConfigurationInfo
 * @property int|null $NumberOfBrokerNodes
 * @property OpenMonitoring|null $OpenMonitoring
 * @property 'DEFAULT'|'PER_BROKER'|'PER_TOPIC_PER_BROKER'|'PER_TOPIC_PER_PARTITION'|null $EnhancedMonitoring
 * @property string|null $KafkaVersion
 * @property LoggingInfo|null $LoggingInfo
 * @property string|null $InstanceType
 * @property ClientAuthentication|null $ClientAuthentication
 * @property EncryptionInfo|null $EncryptionInfo
 * @property ConnectivityInfo|null $ConnectivityInfo
 * @property 'LOCAL'|'TIERED'|null $StorageMode
 * @property BrokerCountUpdateInfo|null $BrokerCountUpdateInfo
 * @property Rebalancing|null $Rebalancing
 */
class MutableClusterInfo extends Shape
{
    /**
     * @param array{
     *     BrokerEBSVolumeInfo?: list<BrokerEBSVolumeInfo>|null,
     *     ConfigurationInfo?: ConfigurationInfo|null,
     *     NumberOfBrokerNodes?: int|null,
     *     OpenMonitoring?: OpenMonitoring|null,
     *     EnhancedMonitoring?: 'DEFAULT'|'PER_BROKER'|'PER_TOPIC_PER_BROKER'|'PER_TOPIC_PER_PARTITION'|null,
     *     KafkaVersion?: string|null,
     *     LoggingInfo?: LoggingInfo|null,
     *     InstanceType?: string|null,
     *     ClientAuthentication?: ClientAuthentication|null,
     *     EncryptionInfo?: EncryptionInfo|null,
     *     ConnectivityInfo?: ConnectivityInfo|null,
     *     StorageMode?: 'LOCAL'|'TIERED'|null,
     *     BrokerCountUpdateInfo?: BrokerCountUpdateInfo|null,
     *     Rebalancing?: Rebalancing|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
