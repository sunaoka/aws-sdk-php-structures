<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\UpdateScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 */
class TargetId extends Shape
{
    /**
     * @param array{accountId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
