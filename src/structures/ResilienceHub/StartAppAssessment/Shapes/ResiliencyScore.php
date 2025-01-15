<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\StartAppAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<'Compliance'|'Test'|'Alarm'|'Sop', ScoringComponentResiliencyScore>|null $componentScore
 * @property array<'Software'|'Hardware'|'AZ'|'Region', double> $disruptionScore
 * @property double $score
 */
class ResiliencyScore extends Shape
{
    /**
     * @param array{
     *     componentScore?: array<'Compliance'|'Test'|'Alarm'|'Sop', ScoringComponentResiliencyScore>|null,
     *     disruptionScore: array<'Software'|'Hardware'|'AZ'|'Region', double>,
     *     score: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
