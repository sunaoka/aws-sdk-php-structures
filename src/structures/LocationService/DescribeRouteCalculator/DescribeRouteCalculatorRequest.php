<?php

namespace Sunaoka\Aws\Structures\LocationService\DescribeRouteCalculator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CalculatorName
 */
class DescribeRouteCalculatorRequest extends Request
{
    /**
     * @param array{CalculatorName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
