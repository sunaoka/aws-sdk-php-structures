<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListFlowAliases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $description
 * @property string $flowId
 * @property string $id
 * @property string $name
 * @property list<FlowAliasRoutingConfigurationListItem> $routingConfiguration
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class FlowAliasSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     description?: string|null,
     *     flowId: string,
     *     id: string,
     *     name: string,
     *     routingConfiguration: list<FlowAliasRoutingConfigurationListItem>,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
