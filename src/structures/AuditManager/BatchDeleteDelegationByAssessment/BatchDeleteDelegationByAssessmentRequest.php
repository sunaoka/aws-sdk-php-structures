<?php

namespace Sunaoka\Aws\Structures\AuditManager\BatchDeleteDelegationByAssessment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $delegationIds
 * @property string $assessmentId
 */
class BatchDeleteDelegationByAssessmentRequest extends Request
{
    /**
     * @param array{
     *     delegationIds: list<string>,
     *     assessmentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
