<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetLambdaFunctionRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Finding'|'FindingReasonCode'|null $name
 * @property list<string>|null $values
 */
class LambdaFunctionRecommendationFilter extends Shape
{
    /**
     * @param array{
     *     name?: 'Finding'|'FindingReasonCode'|null,
     *     values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
