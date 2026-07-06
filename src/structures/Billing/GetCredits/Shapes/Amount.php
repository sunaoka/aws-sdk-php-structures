<?php

namespace Sunaoka\Aws\Structures\Billing\GetCredits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $currencyCode
 * @property string $currencyAmount
 */
class Amount extends Shape
{
    /**
     * @param array{
     *     currencyCode: string,
     *     currencyAmount: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
