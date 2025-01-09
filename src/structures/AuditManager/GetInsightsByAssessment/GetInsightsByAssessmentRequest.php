<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetInsightsByAssessment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentId
 */
class GetInsightsByAssessmentRequest extends Request
{
    /**
     * @param array{assessmentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
