<?php

namespace Sunaoka\Aws\Structures\Ssm\ListNodesSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Count' $AggregatorType
 * @property 'Instance' $TypeName
 * @property 'AgentVersion'|'PlatformName'|'PlatformType'|'PlatformVersion'|'Region'|'ResourceType' $AttributeName
 * @property list<NodeAggregator>|null $Aggregators
 */
class NodeAggregator extends Shape
{
    /**
     * @param array{
     *     AggregatorType: 'Count',
     *     TypeName: 'Instance',
     *     AttributeName: 'AgentVersion'|'PlatformName'|'PlatformType'|'PlatformVersion'|'Region'|'ResourceType',
     *     Aggregators?: list<NodeAggregator>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
