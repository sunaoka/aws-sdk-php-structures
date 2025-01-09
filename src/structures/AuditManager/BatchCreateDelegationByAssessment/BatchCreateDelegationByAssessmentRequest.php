<?php

namespace Sunaoka\Aws\Structures\AuditManager\BatchCreateDelegationByAssessment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\CreateDelegationRequest> $createDelegationRequests
 * @property string $assessmentId
 */
class BatchCreateDelegationByAssessmentRequest extends Request
{
    /**
     * @param array{
     *     createDelegationRequests: list<Shapes\CreateDelegationRequest>,
     *     assessmentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
