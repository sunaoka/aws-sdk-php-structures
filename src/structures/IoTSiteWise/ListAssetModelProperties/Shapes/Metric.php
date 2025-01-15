<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssetModelProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $expression
 * @property list<ExpressionVariable> $variables
 * @property MetricWindow $window
 * @property MetricProcessingConfig|null $processingConfig
 */
class Metric extends Shape
{
    /**
     * @param array{
     *     expression: string,
     *     variables: list<ExpressionVariable>,
     *     window: MetricWindow,
     *     processingConfig?: MetricProcessingConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
