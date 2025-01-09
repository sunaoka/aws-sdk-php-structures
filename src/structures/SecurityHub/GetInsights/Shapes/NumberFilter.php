<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Gte
 * @property double $Lte
 * @property double $Eq
 * @property double $Gt
 * @property double $Lt
 */
class NumberFilter extends Shape
{
    /**
     * @param array{
     *     Gte?: double,
     *     Lte?: double,
     *     Eq?: double,
     *     Gt?: double,
     *     Lt?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
