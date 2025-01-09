<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetLambdaFunctionRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Finding'|'FindingReasonCode' $name
 * @property list<string> $values
 */
class LambdaFunctionRecommendationFilter extends Shape
{
    /**
     * @param array{
     *     name?: 'Finding'|'FindingReasonCode',
     *     values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
