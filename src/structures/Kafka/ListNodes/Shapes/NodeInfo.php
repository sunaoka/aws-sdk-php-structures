<?php

namespace Sunaoka\Aws\Structures\Kafka\ListNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AddedToClusterTime
 * @property BrokerNodeInfo $BrokerNodeInfo
 * @property ControllerNodeInfo $ControllerNodeInfo
 * @property string $InstanceType
 * @property string $NodeARN
 * @property 'BROKER' $NodeType
 * @property ZookeeperNodeInfo $ZookeeperNodeInfo
 */
class NodeInfo extends Shape
{
    /**
     * @param array{
     *     AddedToClusterTime?: string,
     *     BrokerNodeInfo?: BrokerNodeInfo,
     *     ControllerNodeInfo?: ControllerNodeInfo,
     *     InstanceType?: string,
     *     NodeARN?: string,
     *     NodeType?: 'BROKER',
     *     ZookeeperNodeInfo?: ZookeeperNodeInfo
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
