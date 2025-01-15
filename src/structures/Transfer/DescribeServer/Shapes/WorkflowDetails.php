<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<WorkflowDetail>|null $OnUpload
 * @property list<WorkflowDetail>|null $OnPartialUpload
 */
class WorkflowDetails extends Shape
{
    /**
     * @param array{
     *     OnUpload?: list<WorkflowDetail>|null,
     *     OnPartialUpload?: list<WorkflowDetail>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
