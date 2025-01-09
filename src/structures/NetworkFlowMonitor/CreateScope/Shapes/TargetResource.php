<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\CreateScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TargetIdentifier $targetIdentifier
 * @property string $region
 */
class TargetResource extends Shape
{
    /**
     * @param array{
     *     targetIdentifier: TargetIdentifier,
     *     region: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
