<?php

namespace Sunaoka\Aws\Structures\AuditManager\CreateAssessmentReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $description
 * @property string $assessmentId
 * @property string $queryStatement
 */
class CreateAssessmentReportRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string,
     *     assessmentId: string,
     *     queryStatement?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
