<?php

namespace Sunaoka\Aws\Structures\AuditManager\ListAssessmentReports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $description
 * @property string $assessmentId
 * @property string $assessmentName
 * @property string $author
 * @property 'COMPLETE'|'IN_PROGRESS'|'FAILED' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 */
class AssessmentReportMetadata extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     name?: string,
     *     description?: string,
     *     assessmentId?: string,
     *     assessmentName?: string,
     *     author?: string,
     *     status?: 'COMPLETE'|'IN_PROGRESS'|'FAILED',
     *     creationTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
