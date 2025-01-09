<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateAssetModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $expression
 * @property list<ExpressionVariable> $variables
 * @property MetricWindow $window
 * @property MetricProcessingConfig $processingConfig
 */
class Metric extends Shape
{
    /**
     * @param array{
     *     expression: string,
     *     variables: list<ExpressionVariable>,
     *     window: MetricWindow,
     *     processingConfig?: MetricProcessingConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
