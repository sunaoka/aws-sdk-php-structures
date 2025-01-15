<?php

namespace Sunaoka\Aws\Structures\AuditManager\CreateAssessmentReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property string $assessmentId
 * @property string|null $queryStatement
 */
class CreateAssessmentReportRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     assessmentId: string,
     *     queryStatement?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
