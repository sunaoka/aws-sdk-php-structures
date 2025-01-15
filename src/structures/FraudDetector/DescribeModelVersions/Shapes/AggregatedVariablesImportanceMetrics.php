<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AggregatedLogOddsMetric>|null $logOddsMetrics
 */
class AggregatedVariablesImportanceMetrics extends Shape
{
    /**
     * @param array{logOddsMetrics?: list<AggregatedLogOddsMetric>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
