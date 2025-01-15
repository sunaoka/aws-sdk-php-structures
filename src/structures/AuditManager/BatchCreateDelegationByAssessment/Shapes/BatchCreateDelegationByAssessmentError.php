<?php

namespace Sunaoka\Aws\Structures\AuditManager\BatchCreateDelegationByAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CreateDelegationRequest|null $createDelegationRequest
 * @property string|null $errorCode
 * @property string|null $errorMessage
 */
class BatchCreateDelegationByAssessmentError extends Shape
{
    /**
     * @param array{
     *     createDelegationRequest?: CreateDelegationRequest|null,
     *     errorCode?: string|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
