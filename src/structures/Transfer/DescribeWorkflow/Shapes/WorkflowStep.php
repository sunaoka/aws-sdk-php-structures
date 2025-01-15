<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COPY'|'CUSTOM'|'TAG'|'DELETE'|'DECRYPT'|null $Type
 * @property CopyStepDetails|null $CopyStepDetails
 * @property CustomStepDetails|null $CustomStepDetails
 * @property DeleteStepDetails|null $DeleteStepDetails
 * @property TagStepDetails|null $TagStepDetails
 * @property DecryptStepDetails|null $DecryptStepDetails
 */
class WorkflowStep extends Shape
{
    /**
     * @param array{
     *     Type?: 'COPY'|'CUSTOM'|'TAG'|'DELETE'|'DECRYPT'|null,
     *     CopyStepDetails?: CopyStepDetails|null,
     *     CustomStepDetails?: CustomStepDetails|null,
     *     DeleteStepDetails?: DeleteStepDetails|null,
     *     TagStepDetails?: TagStepDetails|null,
     *     DecryptStepDetails?: DecryptStepDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
