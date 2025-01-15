<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListPromptRouters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $promptRouterName
 * @property RoutingCriteria $routingCriteria
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string $promptRouterArn
 * @property list<PromptRouterTargetModel> $models
 * @property PromptRouterTargetModel $fallbackModel
 * @property 'AVAILABLE' $status
 * @property 'custom'|'default' $type
 */
class PromptRouterSummary extends Shape
{
    /**
     * @param array{
     *     promptRouterName: string,
     *     routingCriteria: RoutingCriteria,
     *     description?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     promptRouterArn: string,
     *     models: list<PromptRouterTargetModel>,
     *     fallbackModel: PromptRouterTargetModel,
     *     status: 'AVAILABLE',
     *     type: 'custom'|'default'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
