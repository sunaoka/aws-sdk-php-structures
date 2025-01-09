<?php

namespace Sunaoka\Aws\Structures\AutoScaling\StartInstanceRefresh\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Min
 * @property double $Max
 */
class TotalLocalStorageGBRequest extends Shape
{
    /**
     * @param array{
     *     Min?: double,
     *     Max?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
