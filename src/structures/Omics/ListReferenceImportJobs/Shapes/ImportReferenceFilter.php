<?php

namespace Sunaoka\Aws\Structures\Omics\ListReferenceImportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUBMITTED'|'IN_PROGRESS'|'CANCELLING'|'CANCELLED'|'FAILED'|'COMPLETED'|'COMPLETED_WITH_FAILURES' $status
 * @property \Aws\Api\DateTimeResult $createdAfter
 * @property \Aws\Api\DateTimeResult $createdBefore
 */
class ImportReferenceFilter extends Shape
{
    /**
     * @param array{
     *     status?: 'SUBMITTED'|'IN_PROGRESS'|'CANCELLING'|'CANCELLED'|'FAILED'|'COMPLETED'|'COMPLETED_WITH_FAILURES',
     *     createdAfter?: \Aws\Api\DateTimeResult,
     *     createdBefore?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
