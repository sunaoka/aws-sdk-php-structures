<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetECSServiceRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Finding'|'FindingReasonCode' $name
 * @property list<string> $values
 */
class ECSServiceRecommendationFilter extends Shape
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
