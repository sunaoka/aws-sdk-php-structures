<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ActiveOperationArn
 * @property BrokerNodeGroupInfo|null $BrokerNodeGroupInfo
 * @property ClientAuthentication|null $ClientAuthentication
 * @property string|null $ClusterArn
 * @property string|null $ClusterName
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property BrokerSoftwareInfo|null $CurrentBrokerSoftwareInfo
 * @property LoggingInfo|null $LoggingInfo
 * @property string|null $CurrentVersion
 * @property EncryptionInfo|null $EncryptionInfo
 * @property 'DEFAULT'|'PER_BROKER'|'PER_TOPIC_PER_BROKER'|'PER_TOPIC_PER_PARTITION'|null $EnhancedMonitoring
 * @property int|null $NumberOfBrokerNodes
 * @property OpenMonitoring|null $OpenMonitoring
 * @property 'ACTIVE'|'CREATING'|'DELETING'|'FAILED'|'HEALING'|'MAINTENANCE'|'REBOOTING_BROKER'|'UPDATING'|null $State
 * @property StateInfo|null $StateInfo
 * @property array<string, string>|null $Tags
 * @property string|null $ZookeeperConnectString
 * @property string|null $ZookeeperConnectStringTls
 * @property 'LOCAL'|'TIERED'|null $StorageMode
 * @property Rebalancing|null $Rebalancing
 * @property 'CRITICAL_ACTION_REQUIRED'|'ACTION_RECOMMENDED'|'NONE'|null $CustomerActionStatus
 */
class ClusterInfo extends Shape
{
    /**
     * @param array{
     *     ActiveOperationArn?: string|null,
     *     BrokerNodeGroupInfo?: BrokerNodeGroupInfo|null,
     *     ClientAuthentication?: ClientAuthentication|null,
     *     ClusterArn?: string|null,
     *     ClusterName?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     CurrentBrokerSoftwareInfo?: BrokerSoftwareInfo|null,
     *     LoggingInfo?: LoggingInfo|null,
     *     CurrentVersion?: string|null,
     *     EncryptionInfo?: EncryptionInfo|null,
     *     EnhancedMonitoring?: 'DEFAULT'|'PER_BROKER'|'PER_TOPIC_PER_BROKER'|'PER_TOPIC_PER_PARTITION'|null,
     *     NumberOfBrokerNodes?: int|null,
     *     OpenMonitoring?: OpenMonitoring|null,
     *     State?: 'ACTIVE'|'CREATING'|'DELETING'|'FAILED'|'HEALING'|'MAINTENANCE'|'REBOOTING_BROKER'|'UPDATING'|null,
     *     StateInfo?: StateInfo|null,
     *     Tags?: array<string, string>|null,
     *     ZookeeperConnectString?: string|null,
     *     ZookeeperConnectStringTls?: string|null,
     *     StorageMode?: 'LOCAL'|'TIERED'|null,
     *     Rebalancing?: Rebalancing|null,
     *     CustomerActionStatus?: 'CRITICAL_ACTION_REQUIRED'|'ACTION_RECOMMENDED'|'NONE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
