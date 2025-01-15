<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeAppAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $excludedCount
 * @property int|null $outstandingCount
 * @property double|null $possibleScore
 * @property double|null $score
 */
class ScoringComponentResiliencyScore extends Shape
{
    /**
     * @param array{
     *     excludedCount?: int|null,
     *     outstandingCount?: int|null,
     *     possibleScore?: double|null,
     *     score?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
