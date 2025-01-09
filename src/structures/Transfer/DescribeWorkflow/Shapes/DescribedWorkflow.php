<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Description
 * @property list<WorkflowStep> $Steps
 * @property list<WorkflowStep> $OnExceptionSteps
 * @property string $WorkflowId
 * @property list<Tag> $Tags
 */
class DescribedWorkflow extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Description?: string,
     *     Steps?: list<WorkflowStep>,
     *     OnExceptionSteps?: list<WorkflowStep>,
     *     WorkflowId?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
