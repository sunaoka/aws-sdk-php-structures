<?php

namespace Sunaoka\Aws\Structures\Omics\ListReadSetExportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $sequenceStoreId
 * @property string $destination
 * @property 'SUBMITTED'|'IN_PROGRESS'|'CANCELLING'|'CANCELLED'|'FAILED'|'COMPLETED'|'COMPLETED_WITH_FAILURES' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $completionTime
 */
class ExportReadSetJobDetail extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     sequenceStoreId: string,
     *     destination: string,
     *     status: 'SUBMITTED'|'IN_PROGRESS'|'CANCELLING'|'CANCELLED'|'FAILED'|'COMPLETED'|'COMPLETED_WITH_FAILURES',
     *     creationTime: \Aws\Api\DateTimeResult,
     *     completionTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
