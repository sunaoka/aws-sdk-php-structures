<?php

namespace Sunaoka\Aws\Structures\Lambda\GetAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $TotalCodeSize
 * @property int|null $FunctionCount
 */
class AccountUsage extends Shape
{
    /**
     * @param array{
     *     TotalCodeSize?: int|null,
     *     FunctionCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
