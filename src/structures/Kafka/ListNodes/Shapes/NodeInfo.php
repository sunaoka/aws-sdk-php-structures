<?php

namespace Sunaoka\Aws\Structures\Kafka\ListNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AddedToClusterTime
 * @property BrokerNodeInfo|null $BrokerNodeInfo
 * @property ControllerNodeInfo|null $ControllerNodeInfo
 * @property string|null $InstanceType
 * @property string|null $NodeARN
 * @property 'BROKER'|null $NodeType
 * @property ZookeeperNodeInfo|null $ZookeeperNodeInfo
 */
class NodeInfo extends Shape
{
    /**
     * @param array{
     *     AddedToClusterTime?: string|null,
     *     BrokerNodeInfo?: BrokerNodeInfo|null,
     *     ControllerNodeInfo?: ControllerNodeInfo|null,
     *     InstanceType?: string|null,
     *     NodeARN?: string|null,
     *     NodeType?: 'BROKER'|null,
     *     ZookeeperNodeInfo?: ZookeeperNodeInfo|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
