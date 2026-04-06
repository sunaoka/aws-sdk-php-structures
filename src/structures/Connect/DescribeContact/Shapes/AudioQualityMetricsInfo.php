<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $QualityScore
 * @property list<string>|null $PotentialQualityIssues
 */
class AudioQualityMetricsInfo extends Shape
{
    /**
     * @param array{
     *     QualityScore?: float|null,
     *     PotentialQualityIssues?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
