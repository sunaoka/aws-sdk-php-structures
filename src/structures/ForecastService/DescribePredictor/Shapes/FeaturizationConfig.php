<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribePredictor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ForecastFrequency
 * @property list<string>|null $ForecastDimensions
 * @property list<Featurization>|null $Featurizations
 */
class FeaturizationConfig extends Shape
{
    /**
     * @param array{
     *     ForecastFrequency: string,
     *     ForecastDimensions?: list<string>|null,
     *     Featurizations?: list<Featurization>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
