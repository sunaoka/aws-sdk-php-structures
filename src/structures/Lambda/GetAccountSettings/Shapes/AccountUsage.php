<?php

namespace Sunaoka\Aws\Structures\Lambda\GetAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TotalCodeSize
 * @property int $FunctionCount
 */
class AccountUsage extends Shape
{
    /**
     * @param array{
     *     TotalCodeSize?: int,
     *     FunctionCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
