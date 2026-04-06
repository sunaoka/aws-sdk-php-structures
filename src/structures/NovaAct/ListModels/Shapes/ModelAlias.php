<?php

namespace Sunaoka\Aws\Structures\NovaAct\ListModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $aliasName
 * @property string $latestModelId
 * @property string|null $resolvedModelId
 */
class ModelAlias extends Shape
{
    /**
     * @param array{
     *     aliasName: string,
     *     latestModelId: string,
     *     resolvedModelId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
