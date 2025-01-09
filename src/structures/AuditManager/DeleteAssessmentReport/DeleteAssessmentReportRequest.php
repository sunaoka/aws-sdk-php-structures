<?php

namespace Sunaoka\Aws\Structures\AuditManager\DeleteAssessmentReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentId
 * @property string $assessmentReportId
 */
class DeleteAssessmentReportRequest extends Request
{
    /**
     * @param array{
     *     assessmentId: string,
     *     assessmentReportId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
