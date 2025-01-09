<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BrokerNodeGroupInfo $BrokerNodeGroupInfo
 * @property BrokerSoftwareInfo $CurrentBrokerSoftwareInfo
 * @property ClientAuthentication $ClientAuthentication
 * @property EncryptionInfo $EncryptionInfo
 * @property 'DEFAULT'|'PER_BROKER'|'PER_TOPIC_PER_BROKER'|'PER_TOPIC_PER_PARTITION' $EnhancedMonitoring
 * @property OpenMonitoringInfo $OpenMonitoring
 * @property LoggingInfo $LoggingInfo
 * @property int $NumberOfBrokerNodes
 * @property string $ZookeeperConnectString
 * @property string $ZookeeperConnectStringTls
 * @property 'LOCAL'|'TIERED' $StorageMode
 * @property 'CRITICAL_ACTION_REQUIRED'|'ACTION_RECOMMENDED'|'NONE' $CustomerActionStatus
 */
class Provisioned extends Shape
{
    /**
     * @param array{
     *     BrokerNodeGroupInfo: BrokerNodeGroupInfo,
     *     CurrentBrokerSoftwareInfo?: BrokerSoftwareInfo,
     *     ClientAuthentication?: ClientAuthentication,
     *     EncryptionInfo?: EncryptionInfo,
     *     EnhancedMonitoring?: 'DEFAULT'|'PER_BROKER'|'PER_TOPIC_PER_BROKER'|'PER_TOPIC_PER_PARTITION',
     *     OpenMonitoring?: OpenMonitoringInfo,
     *     LoggingInfo?: LoggingInfo,
     *     NumberOfBrokerNodes: int,
     *     ZookeeperConnectString?: string,
     *     ZookeeperConnectStringTls?: string,
     *     StorageMode?: 'LOCAL'|'TIERED',
     *     CustomerActionStatus?: 'CRITICAL_ACTION_REQUIRED'|'ACTION_RECOMMENDED'|'NONE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
