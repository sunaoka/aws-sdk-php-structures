<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $variableNames
 * @property float $aggregatedVariablesImportance
 */
class AggregatedLogOddsMetric extends Shape
{
    /**
     * @param array{
     *     variableNames: list<string>,
     *     aggregatedVariablesImportance: float
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
