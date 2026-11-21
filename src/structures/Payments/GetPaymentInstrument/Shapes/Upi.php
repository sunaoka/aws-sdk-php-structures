<?php

namespace Sunaoka\Aws\Structures\Payments\GetPaymentInstrument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $appName
 */
class Upi extends Shape
{
    /**
     * @param array{appName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
