<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TargetId $targetId
 * @property 'ACCOUNT' $targetType
 */
class TargetIdentifier extends Shape
{
    /**
     * @param array{
     *     targetId: TargetId,
     *     targetType: 'ACCOUNT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
