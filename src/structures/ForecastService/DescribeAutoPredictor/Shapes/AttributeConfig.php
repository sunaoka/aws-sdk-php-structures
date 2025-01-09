<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeAutoPredictor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttributeName
 * @property array<string, string> $Transformations
 */
class AttributeConfig extends Shape
{
    /**
     * @param array{
     *     AttributeName: string,
     *     Transformations: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
