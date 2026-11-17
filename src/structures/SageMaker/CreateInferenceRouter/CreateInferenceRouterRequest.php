<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateInferenceRouter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InferenceRouterName
 * @property list<Shapes\RoutingTarget> $RoutingTargets
 * @property string|null $ClientToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateInferenceRouterRequest extends Request
{
    /**
     * @param array{
     *     InferenceRouterName: string,
     *     RoutingTargets: list<Shapes\RoutingTarget>,
     *     ClientToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
