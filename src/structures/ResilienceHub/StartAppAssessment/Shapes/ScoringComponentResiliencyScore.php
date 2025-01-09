<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\StartAppAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $excludedCount
 * @property int $outstandingCount
 * @property double $possibleScore
 * @property double $score
 */
class ScoringComponentResiliencyScore extends Shape
{
    /**
     * @param array{
     *     excludedCount?: int,
     *     outstandingCount?: int,
     *     possibleScore?: double,
     *     score?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
