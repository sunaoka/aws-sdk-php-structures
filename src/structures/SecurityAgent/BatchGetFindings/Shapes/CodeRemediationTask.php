<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IN_PROGRESS'|'COMPLETED'|'FAILED' $status
 * @property string|null $statusReason
 * @property list<CodeRemediationTaskDetails>|null $taskDetails
 */
class CodeRemediationTask extends Shape
{
    /**
     * @param array{
     *     status: 'IN_PROGRESS'|'COMPLETED'|'FAILED',
     *     statusReason?: string|null,
     *     taskDetails?: list<CodeRemediationTaskDetails>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
