<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListBulkImportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property 'PENDING'|'CANCELLED'|'RUNNING'|'COMPLETED'|'FAILED'|'COMPLETED_WITH_FAILURES' $status
 */
class JobSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     status: 'PENDING'|'CANCELLED'|'RUNNING'|'COMPLETED'|'FAILED'|'COMPLETED_WITH_FAILURES'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
