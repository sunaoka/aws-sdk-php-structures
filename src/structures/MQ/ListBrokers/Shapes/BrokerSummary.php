<?php

namespace Sunaoka\Aws\Structures\MQ\ListBrokers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BrokerArn
 * @property string|null $BrokerId
 * @property string|null $BrokerName
 * @property 'CREATION_IN_PROGRESS'|'CREATION_FAILED'|'DELETION_IN_PROGRESS'|'RUNNING'|'REBOOT_IN_PROGRESS'|'CRITICAL_ACTION_REQUIRED'|'REPLICA'|null $BrokerState
 * @property \Aws\Api\DateTimeResult|null $Created
 * @property 'SINGLE_INSTANCE'|'ACTIVE_STANDBY_MULTI_AZ'|'CLUSTER_MULTI_AZ' $DeploymentMode
 * @property 'ACTIVEMQ'|'RABBITMQ' $EngineType
 * @property string|null $HostInstanceType
 */
class BrokerSummary extends Shape
{
    /**
     * @param array{
     *     BrokerArn?: string|null,
     *     BrokerId?: string|null,
     *     BrokerName?: string|null,
     *     BrokerState?: 'CREATION_IN_PROGRESS'|'CREATION_FAILED'|'DELETION_IN_PROGRESS'|'RUNNING'|'REBOOT_IN_PROGRESS'|'CRITICAL_ACTION_REQUIRED'|'REPLICA'|null,
     *     Created?: \Aws\Api\DateTimeResult|null,
     *     DeploymentMode: 'SINGLE_INSTANCE'|'ACTIVE_STANDBY_MULTI_AZ'|'CLUSTER_MULTI_AZ',
     *     EngineType: 'ACTIVEMQ'|'RABBITMQ',
     *     HostInstanceType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
