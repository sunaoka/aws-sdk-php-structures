<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BrokerNodeGroupInfo $BrokerNodeGroupInfo
 * @property BrokerSoftwareInfo|null $CurrentBrokerSoftwareInfo
 * @property ClientAuthentication|null $ClientAuthentication
 * @property EncryptionInfo|null $EncryptionInfo
 * @property 'DEFAULT'|'PER_BROKER'|'PER_TOPIC_PER_BROKER'|'PER_TOPIC_PER_PARTITION'|null $EnhancedMonitoring
 * @property OpenMonitoringInfo|null $OpenMonitoring
 * @property LoggingInfo|null $LoggingInfo
 * @property int<1, 15> $NumberOfBrokerNodes
 * @property string|null $ZookeeperConnectString
 * @property string|null $ZookeeperConnectStringTls
 * @property 'LOCAL'|'TIERED'|null $StorageMode
 * @property Rebalancing|null $Rebalancing
 * @property 'CRITICAL_ACTION_REQUIRED'|'ACTION_RECOMMENDED'|'NONE'|null $CustomerActionStatus
 */
class Provisioned extends Shape
{
    /**
     * @param array{
     *     BrokerNodeGroupInfo: BrokerNodeGroupInfo,
     *     CurrentBrokerSoftwareInfo?: BrokerSoftwareInfo|null,
     *     ClientAuthentication?: ClientAuthentication|null,
     *     EncryptionInfo?: EncryptionInfo|null,
     *     EnhancedMonitoring?: 'DEFAULT'|'PER_BROKER'|'PER_TOPIC_PER_BROKER'|'PER_TOPIC_PER_PARTITION'|null,
     *     OpenMonitoring?: OpenMonitoringInfo|null,
     *     LoggingInfo?: LoggingInfo|null,
     *     NumberOfBrokerNodes: int<1, 15>,
     *     ZookeeperConnectString?: string|null,
     *     ZookeeperConnectStringTls?: string|null,
     *     StorageMode?: 'LOCAL'|'TIERED'|null,
     *     Rebalancing?: Rebalancing|null,
     *     CustomerActionStatus?: 'CRITICAL_ACTION_REQUIRED'|'ACTION_RECOMMENDED'|'NONE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
