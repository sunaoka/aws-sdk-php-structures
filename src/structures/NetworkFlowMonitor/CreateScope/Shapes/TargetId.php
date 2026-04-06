<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\CreateScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 */
class TargetId extends Shape
{
    /**
     * @param array{accountId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
