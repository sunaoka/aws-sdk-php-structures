<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlanInRegion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $timeoutMinutes
 * @property string $approvalRole
 */
class ExecutionApprovalConfiguration extends Shape
{
    /**
     * @param array{
     *     timeoutMinutes?: int<1, max>|null,
     *     approvalRole: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
