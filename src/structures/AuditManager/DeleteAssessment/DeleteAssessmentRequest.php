<?php

namespace Sunaoka\Aws\Structures\AuditManager\DeleteAssessment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentId
 */
class DeleteAssessmentRequest extends Request
{
    /**
     * @param array{assessmentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
