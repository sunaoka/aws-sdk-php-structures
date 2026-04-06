<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $description
 * @property string $ratingMethod
 */
class HumanEvaluationCustomMetric extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     ratingMethod: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
