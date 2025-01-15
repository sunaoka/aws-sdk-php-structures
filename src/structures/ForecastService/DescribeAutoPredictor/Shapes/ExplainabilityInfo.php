<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeAutoPredictor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ExplainabilityArn
 * @property string|null $Status
 */
class ExplainabilityInfo extends Shape
{
    /**
     * @param array{
     *     ExplainabilityArn?: string|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
