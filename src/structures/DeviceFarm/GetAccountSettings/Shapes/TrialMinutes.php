<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $total
 * @property double $remaining
 */
class TrialMinutes extends Shape
{
    /**
     * @param array{
     *     total?: double,
     *     remaining?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
