<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RemediationAction $RemediationAction
 * @property int<-2147483648, 2147483647> $Order
 */
class RemediationActionWithOrder extends Shape
{
    /**
     * @param array{
     *     RemediationAction?: RemediationAction,
     *     Order?: int<-2147483648, 2147483647>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
