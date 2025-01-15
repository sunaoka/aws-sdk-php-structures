<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string|null $Description
 * @property list<WorkflowStep>|null $Steps
 * @property list<WorkflowStep>|null $OnExceptionSteps
 * @property string|null $WorkflowId
 * @property list<Tag>|null $Tags
 */
class DescribedWorkflow extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Description?: string|null,
     *     Steps?: list<WorkflowStep>|null,
     *     OnExceptionSteps?: list<WorkflowStep>|null,
     *     WorkflowId?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
