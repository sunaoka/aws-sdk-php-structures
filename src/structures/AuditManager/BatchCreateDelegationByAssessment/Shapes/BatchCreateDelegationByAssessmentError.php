<?php

namespace Sunaoka\Aws\Structures\AuditManager\BatchCreateDelegationByAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CreateDelegationRequest $createDelegationRequest
 * @property string $errorCode
 * @property string $errorMessage
 */
class BatchCreateDelegationByAssessmentError extends Shape
{
    /**
     * @param array{
     *     createDelegationRequest?: CreateDelegationRequest,
     *     errorCode?: string,
     *     errorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
