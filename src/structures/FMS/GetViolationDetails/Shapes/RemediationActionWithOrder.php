<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RemediationAction $RemediationAction
 * @property int $Order
 */
class RemediationActionWithOrder extends Shape
{
    /**
     * @param array{
     *     RemediationAction?: RemediationAction,
     *     Order?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
