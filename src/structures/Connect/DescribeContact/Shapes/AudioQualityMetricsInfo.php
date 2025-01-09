<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float $QualityScore
 * @property list<string> $PotentialQualityIssues
 */
class AudioQualityMetricsInfo extends Shape
{
    /**
     * @param array{
     *     QualityScore?: float,
     *     PotentialQualityIssues?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
