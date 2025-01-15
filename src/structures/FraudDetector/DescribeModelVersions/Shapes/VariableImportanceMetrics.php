<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LogOddsMetric>|null $logOddsMetrics
 */
class VariableImportanceMetrics extends Shape
{
    /**
     * @param array{logOddsMetrics?: list<LogOddsMetric>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
