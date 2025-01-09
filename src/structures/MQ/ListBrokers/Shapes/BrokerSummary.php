<?php

namespace Sunaoka\Aws\Structures\MQ\ListBrokers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BrokerArn
 * @property string $BrokerId
 * @property string $BrokerName
 * @property 'CREATION_IN_PROGRESS'|'CREATION_FAILED'|'DELETION_IN_PROGRESS'|'RUNNING'|'REBOOT_IN_PROGRESS'|'CRITICAL_ACTION_REQUIRED'|'REPLICA' $BrokerState
 * @property \Aws\Api\DateTimeResult $Created
 * @property 'SINGLE_INSTANCE'|'ACTIVE_STANDBY_MULTI_AZ'|'CLUSTER_MULTI_AZ' $DeploymentMode
 * @property 'ACTIVEMQ'|'RABBITMQ' $EngineType
 * @property string $HostInstanceType
 */
class BrokerSummary extends Shape
{
    /**
     * @param array{
     *     BrokerArn?: string,
     *     BrokerId?: string,
     *     BrokerName?: string,
     *     BrokerState?: 'CREATION_IN_PROGRESS'|'CREATION_FAILED'|'DELETION_IN_PROGRESS'|'RUNNING'|'REBOOT_IN_PROGRESS'|'CRITICAL_ACTION_REQUIRED'|'REPLICA',
     *     Created?: \Aws\Api\DateTimeResult,
     *     DeploymentMode: 'SINGLE_INSTANCE'|'ACTIVE_STANDBY_MULTI_AZ'|'CLUSTER_MULTI_AZ',
     *     EngineType: 'ACTIVEMQ'|'RABBITMQ',
     *     HostInstanceType?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
