<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribePredictor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'filling' $FeaturizationMethodName
 * @property array<string, string> $FeaturizationMethodParameters
 */
class FeaturizationMethod extends Shape
{
    /**
     * @param array{
     *     FeaturizationMethodName: 'filling',
     *     FeaturizationMethodParameters?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
