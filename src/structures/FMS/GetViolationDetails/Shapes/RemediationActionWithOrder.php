<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RemediationAction|null $RemediationAction
 * @property int<-2147483648, 2147483647>|null $Order
 */
class RemediationActionWithOrder extends Shape
{
    /**
     * @param array{
     *     RemediationAction?: RemediationAction|null,
     *     Order?: int<-2147483648, 2147483647>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
