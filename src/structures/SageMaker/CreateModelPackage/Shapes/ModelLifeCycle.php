<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelPackage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Stage
 * @property string $StageStatus
 * @property string $StageDescription
 */
class ModelLifeCycle extends Shape
{
    /**
     * @param array{
     *     Stage: string,
     *     StageStatus: string,
     *     StageDescription?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
