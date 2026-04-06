<?php

namespace Sunaoka\Aws\Structures\NovaAct\ListModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelId
 * @property ModelLifecycle $modelLifecycle
 * @property int $minimumCompatibilityVersion
 */
class ModelSummary extends Shape
{
    /**
     * @param array{
     *     modelId: string,
     *     modelLifecycle: ModelLifecycle,
     *     minimumCompatibilityVersion: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
