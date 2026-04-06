<?php

namespace Sunaoka\Aws\Structures\SecurityHub\UpdateInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Gte
 * @property double|null $Lte
 * @property double|null $Gt
 * @property double|null $Lt
 * @property double|null $Eq
 */
class NumberFilter extends Shape
{
    /**
     * @param array{
     *     Gte?: double|null,
     *     Lte?: double|null,
     *     Gt?: double|null,
     *     Lt?: double|null,
     *     Eq?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
