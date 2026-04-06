<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateAssetModelCompositeModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $expression
 * @property list<ExpressionVariable>|null $variables
 * @property MetricWindow $window
 * @property MetricProcessingConfig|null $processingConfig
 */
class Metric extends Shape
{
    /**
     * @param array{
     *     expression?: string|null,
     *     variables?: list<ExpressionVariable>|null,
     *     window: MetricWindow,
     *     processingConfig?: MetricProcessingConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
