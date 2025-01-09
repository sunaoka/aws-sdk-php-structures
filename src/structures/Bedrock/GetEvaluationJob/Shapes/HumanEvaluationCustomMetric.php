<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $description
 * @property string $ratingMethod
 */
class HumanEvaluationCustomMetric extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     ratingMethod: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
