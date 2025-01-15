<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateAssessmentControl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentId
 * @property string $controlSetId
 * @property string $controlId
 * @property 'UNDER_REVIEW'|'REVIEWED'|'INACTIVE'|null $controlStatus
 * @property string|null $commentBody
 */
class UpdateAssessmentControlRequest extends Request
{
    /**
     * @param array{
     *     assessmentId: string,
     *     controlSetId: string,
     *     controlId: string,
     *     controlStatus?: 'UNDER_REVIEW'|'REVIEWED'|'INACTIVE'|null,
     *     commentBody?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
