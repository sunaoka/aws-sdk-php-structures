<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetAssessmentReportUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentReportId
 * @property string $assessmentId
 */
class GetAssessmentReportUrlRequest extends Request
{
    /**
     * @param array{
     *     assessmentReportId: string,
     *     assessmentId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
