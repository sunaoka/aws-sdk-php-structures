<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListCustomLineItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Service
 */
class PresentationObject extends Shape
{
    /**
     * @param array{Service: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
