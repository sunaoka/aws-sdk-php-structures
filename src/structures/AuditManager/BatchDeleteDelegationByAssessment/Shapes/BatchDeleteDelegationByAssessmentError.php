<?php

namespace Sunaoka\Aws\Structures\AuditManager\BatchDeleteDelegationByAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $delegationId
 * @property string $errorCode
 * @property string $errorMessage
 */
class BatchDeleteDelegationByAssessmentError extends Shape
{
    /**
     * @param array{
     *     delegationId?: string,
     *     errorCode?: string,
     *     errorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
