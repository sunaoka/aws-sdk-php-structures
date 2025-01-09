<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ModelName
 * @property string $ModelArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 */
class ModelSummary extends Shape
{
    /**
     * @param array{
     *     ModelName: string,
     *     ModelArn: string,
     *     CreationTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
