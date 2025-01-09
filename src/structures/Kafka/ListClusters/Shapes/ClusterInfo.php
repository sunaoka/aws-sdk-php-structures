<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ActiveOperationArn
 * @property BrokerNodeGroupInfo $BrokerNodeGroupInfo
 * @property ClientAuthentication $ClientAuthentication
 * @property string $ClusterArn
 * @property string $ClusterName
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property BrokerSoftwareInfo $CurrentBrokerSoftwareInfo
 * @property LoggingInfo $LoggingInfo
 * @property string $CurrentVersion
 * @property EncryptionInfo $EncryptionInfo
 * @property 'DEFAULT'|'PER_BROKER'|'PER_TOPIC_PER_BROKER'|'PER_TOPIC_PER_PARTITION' $EnhancedMonitoring
 * @property int $NumberOfBrokerNodes
 * @property OpenMonitoring $OpenMonitoring
 * @property 'ACTIVE'|'CREATING'|'DELETING'|'FAILED'|'HEALING'|'MAINTENANCE'|'REBOOTING_BROKER'|'UPDATING' $State
 * @property StateInfo $StateInfo
 * @property array<string, string> $Tags
 * @property string $ZookeeperConnectString
 * @property string $ZookeeperConnectStringTls
 * @property 'LOCAL'|'TIERED' $StorageMode
 * @property 'CRITICAL_ACTION_REQUIRED'|'ACTION_RECOMMENDED'|'NONE' $CustomerActionStatus
 */
class ClusterInfo extends Shape
{
    /**
     * @param array{
     *     ActiveOperationArn?: string,
     *     BrokerNodeGroupInfo?: BrokerNodeGroupInfo,
     *     ClientAuthentication?: ClientAuthentication,
     *     ClusterArn?: string,
     *     ClusterName?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     CurrentBrokerSoftwareInfo?: BrokerSoftwareInfo,
     *     LoggingInfo?: LoggingInfo,
     *     CurrentVersion?: string,
     *     EncryptionInfo?: EncryptionInfo,
     *     EnhancedMonitoring?: 'DEFAULT'|'PER_BROKER'|'PER_TOPIC_PER_BROKER'|'PER_TOPIC_PER_PARTITION',
     *     NumberOfBrokerNodes?: int,
     *     OpenMonitoring?: OpenMonitoring,
     *     State?: 'ACTIVE'|'CREATING'|'DELETING'|'FAILED'|'HEALING'|'MAINTENANCE'|'REBOOTING_BROKER'|'UPDATING',
     *     StateInfo?: StateInfo,
     *     Tags?: array<string, string>,
     *     ZookeeperConnectString?: string,
     *     ZookeeperConnectStringTls?: string,
     *     StorageMode?: 'LOCAL'|'TIERED',
     *     CustomerActionStatus?: 'CRITICAL_ACTION_REQUIRED'|'ACTION_RECOMMENDED'|'NONE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
