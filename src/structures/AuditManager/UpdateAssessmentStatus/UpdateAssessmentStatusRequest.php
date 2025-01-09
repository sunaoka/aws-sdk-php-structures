<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateAssessmentStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentId
 * @property 'ACTIVE'|'INACTIVE' $status
 */
class UpdateAssessmentStatusRequest extends Request
{
    /**
     * @param array{
     *     assessmentId: string,
     *     status: 'ACTIVE'|'INACTIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
