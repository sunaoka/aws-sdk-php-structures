<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeAutoPredictor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExplainabilityArn
 * @property string $Status
 */
class ExplainabilityInfo extends Shape
{
    /**
     * @param array{
     *     ExplainabilityArn?: string,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
