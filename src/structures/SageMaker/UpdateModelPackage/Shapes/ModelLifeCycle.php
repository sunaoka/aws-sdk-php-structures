<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateModelPackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Stage
 * @property string $StageStatus
 * @property string|null $StageDescription
 */
class ModelLifeCycle extends Shape
{
    /**
     * @param array{
     *     Stage: string,
     *     StageStatus: string,
     *     StageDescription?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
