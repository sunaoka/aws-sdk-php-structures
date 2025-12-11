<?php

namespace Sunaoka\Aws\Structures\MWAAServerless\ListWorkflowRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RunId
 * @property string|null $WorkflowArn
 * @property string|null $WorkflowVersion
 * @property 'ON_DEMAND'|'SCHEDULED'|null $RunType
 * @property RunDetailSummary|null $RunDetailSummary
 */
class WorkflowRunSummary extends Shape
{
    /**
     * @param array{
     *     RunId?: string|null,
     *     WorkflowArn?: string|null,
     *     WorkflowVersion?: string|null,
     *     RunType?: 'ON_DEMAND'|'SCHEDULED'|null,
     *     RunDetailSummary?: RunDetailSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
