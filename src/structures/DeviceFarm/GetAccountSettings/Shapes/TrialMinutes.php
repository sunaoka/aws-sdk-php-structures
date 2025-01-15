<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $total
 * @property double|null $remaining
 */
class TrialMinutes extends Shape
{
    /**
     * @param array{
     *     total?: double|null,
     *     remaining?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
