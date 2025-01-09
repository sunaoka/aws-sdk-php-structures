<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $variableName
 * @property string $variableType
 * @property float $variableImportance
 */
class LogOddsMetric extends Shape
{
    /**
     * @param array{
     *     variableName: string,
     *     variableType: string,
     *     variableImportance: float
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
