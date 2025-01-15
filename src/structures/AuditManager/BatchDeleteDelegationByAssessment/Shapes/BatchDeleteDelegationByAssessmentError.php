<?php

namespace Sunaoka\Aws\Structures\AuditManager\BatchDeleteDelegationByAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $delegationId
 * @property string|null $errorCode
 * @property string|null $errorMessage
 */
class BatchDeleteDelegationByAssessmentError extends Shape
{
    /**
     * @param array{
     *     delegationId?: string|null,
     *     errorCode?: string|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
