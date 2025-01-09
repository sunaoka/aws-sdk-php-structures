<?php

namespace Sunaoka\Aws\Structures\Omics\ListVariantImportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUBMITTED'|'IN_PROGRESS'|'CANCELLED'|'COMPLETED'|'FAILED'|'COMPLETED_WITH_FAILURES' $status
 * @property string $storeName
 */
class ListVariantImportJobsFilter extends Shape
{
    /**
     * @param array{
     *     status?: 'SUBMITTED'|'IN_PROGRESS'|'CANCELLED'|'COMPLETED'|'FAILED'|'COMPLETED_WITH_FAILURES',
     *     storeName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
