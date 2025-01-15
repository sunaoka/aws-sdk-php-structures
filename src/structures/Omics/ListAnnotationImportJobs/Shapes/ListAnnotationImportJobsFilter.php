<?php

namespace Sunaoka\Aws\Structures\Omics\ListAnnotationImportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUBMITTED'|'IN_PROGRESS'|'CANCELLED'|'COMPLETED'|'FAILED'|'COMPLETED_WITH_FAILURES'|null $status
 * @property string|null $storeName
 */
class ListAnnotationImportJobsFilter extends Shape
{
    /**
     * @param array{
     *     status?: 'SUBMITTED'|'IN_PROGRESS'|'CANCELLED'|'COMPLETED'|'FAILED'|'COMPLETED_WITH_FAILURES'|null,
     *     storeName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
