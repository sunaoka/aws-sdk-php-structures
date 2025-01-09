<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetAssessment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentId
 */
class GetAssessmentRequest extends Request
{
    /**
     * @param array{assessmentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
