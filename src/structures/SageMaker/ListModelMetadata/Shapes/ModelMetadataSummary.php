<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListModelMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Domain
 * @property string $Framework
 * @property string $Task
 * @property string $Model
 * @property string $FrameworkVersion
 */
class ModelMetadataSummary extends Shape
{
    /**
     * @param array{
     *     Domain: string,
     *     Framework: string,
     *     Task: string,
     *     Model: string,
     *     FrameworkVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
