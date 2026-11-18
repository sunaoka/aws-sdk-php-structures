<?php

namespace Sunaoka\Aws\Structures\Billing\SplitCredit\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $creditId
 * @property string $amount
 */
class ChildCredit extends Shape
{
    /**
     * @param array{
     *     creditId?: string|null,
     *     amount: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
