<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AggregatedLogOddsMetric> $logOddsMetrics
 */
class AggregatedVariablesImportanceMetrics extends Shape
{
    /**
     * @param array{logOddsMetrics?: list<AggregatedLogOddsMetric>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
