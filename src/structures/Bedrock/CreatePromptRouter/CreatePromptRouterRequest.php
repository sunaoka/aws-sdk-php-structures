<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreatePromptRouter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientRequestToken
 * @property string $promptRouterName
 * @property list<Shapes\PromptRouterTargetModel> $models
 * @property string|null $description
 * @property Shapes\RoutingCriteria $routingCriteria
 * @property Shapes\PromptRouterTargetModel $fallbackModel
 * @property list<Shapes\Tag>|null $tags
 */
class CreatePromptRouterRequest extends Request
{
    /**
     * @param array{
     *     clientRequestToken?: string|null,
     *     promptRouterName: string,
     *     models: list<Shapes\PromptRouterTargetModel>,
     *     description?: string|null,
     *     routingCriteria: Shapes\RoutingCriteria,
     *     fallbackModel: Shapes\PromptRouterTargetModel,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
