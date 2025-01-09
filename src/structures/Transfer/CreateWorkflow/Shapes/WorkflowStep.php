<?php

namespace Sunaoka\Aws\Structures\Transfer\CreateWorkflow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COPY'|'CUSTOM'|'TAG'|'DELETE'|'DECRYPT' $Type
 * @property CopyStepDetails $CopyStepDetails
 * @property CustomStepDetails $CustomStepDetails
 * @property DeleteStepDetails $DeleteStepDetails
 * @property TagStepDetails $TagStepDetails
 * @property DecryptStepDetails $DecryptStepDetails
 */
class WorkflowStep extends Shape
{
    /**
     * @param array{
     *     Type?: 'COPY'|'CUSTOM'|'TAG'|'DELETE'|'DECRYPT',
     *     CopyStepDetails?: CopyStepDetails,
     *     CustomStepDetails?: CustomStepDetails,
     *     DeleteStepDetails?: DeleteStepDetails,
     *     TagStepDetails?: TagStepDetails,
     *     DecryptStepDetails?: DecryptStepDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
