<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Step>|null $steps
 * @property 'activate'|'deactivate'|'postRecovery' $workflowTargetAction
 * @property string|null $workflowTargetRegion
 * @property string|null $workflowDescription
 */
class Workflow extends Shape
{
    /**
     * @param array{
     *     steps?: list<Step>|null,
     *     workflowTargetAction: 'activate'|'deactivate'|'postRecovery',
     *     workflowTargetRegion?: string|null,
     *     workflowDescription?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
