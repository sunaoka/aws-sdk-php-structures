<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<WorkflowDetail> $OnUpload
 * @property list<WorkflowDetail> $OnPartialUpload
 */
class WorkflowDetails extends Shape
{
    /**
     * @param array{
     *     OnUpload?: list<WorkflowDetail>,
     *     OnPartialUpload?: list<WorkflowDetail>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
