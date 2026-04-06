<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetPromptRouter;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $promptRouterName
 * @property Shapes\RoutingCriteria $routingCriteria
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string $promptRouterArn
 * @property list<Shapes\PromptRouterTargetModel> $models
 * @property Shapes\PromptRouterTargetModel $fallbackModel
 * @property 'AVAILABLE' $status
 * @property 'custom'|'default' $type
 */
class GetPromptRouterResponse extends Response
{
}
