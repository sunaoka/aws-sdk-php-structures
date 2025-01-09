<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribePredictor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ForecastFrequency
 * @property list<string> $ForecastDimensions
 * @property list<Featurization> $Featurizations
 */
class FeaturizationConfig extends Shape
{
    /**
     * @param array{
     *     ForecastFrequency: string,
     *     ForecastDimensions?: list<string>,
     *     Featurizations?: list<Featurization>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
