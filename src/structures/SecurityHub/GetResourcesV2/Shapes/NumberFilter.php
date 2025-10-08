<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetResourcesV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Gte
 * @property double|null $Lte
 * @property double|null $Eq
 * @property double|null $Gt
 * @property double|null $Lt
 */
class NumberFilter extends Shape
{
    /**
     * @param array{
     *     Gte?: double|null,
     *     Lte?: double|null,
     *     Eq?: double|null,
     *     Gt?: double|null,
     *     Lt?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
