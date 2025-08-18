<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListFlowAliases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $description
 * @property list<FlowAliasRoutingConfigurationListItem> $routingConfiguration
 * @property FlowAliasConcurrencyConfiguration|null $concurrencyConfiguration
 * @property string $flowId
 * @property string $id
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class FlowAliasSummary extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     routingConfiguration: list<FlowAliasRoutingConfigurationListItem>,
     *     concurrencyConfiguration?: FlowAliasConcurrencyConfiguration|null,
     *     flowId: string,
     *     id: string,
     *     arn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
