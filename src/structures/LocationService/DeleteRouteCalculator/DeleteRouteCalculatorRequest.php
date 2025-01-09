<?php

namespace Sunaoka\Aws\Structures\LocationService\DeleteRouteCalculator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CalculatorName
 */
class DeleteRouteCalculatorRequest extends Request
{
    /**
     * @param array{CalculatorName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
