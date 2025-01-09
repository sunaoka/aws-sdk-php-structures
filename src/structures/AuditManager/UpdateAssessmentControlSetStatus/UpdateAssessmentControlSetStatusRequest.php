<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateAssessmentControlSetStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentId
 * @property string $controlSetId
 * @property 'ACTIVE'|'UNDER_REVIEW'|'REVIEWED' $status
 * @property string $comment
 */
class UpdateAssessmentControlSetStatusRequest extends Request
{
    /**
     * @param array{
     *     assessmentId: string,
     *     controlSetId: string,
     *     status: 'ACTIVE'|'UNDER_REVIEW'|'REVIEWED',
     *     comment: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
