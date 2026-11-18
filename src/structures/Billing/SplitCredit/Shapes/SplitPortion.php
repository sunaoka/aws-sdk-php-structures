<?php

namespace Sunaoka\Aws\Structures\Billing\SplitCredit\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $amount
 * @property string|null $description
 */
class SplitPortion extends Shape
{
    /**
     * @param array{
     *     amount: string,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
