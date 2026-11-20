<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListOpportunityBulkJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobId
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED' $Status
 * @property int $TotalRecords
 * @property int $ProcessedRecords
 * @property int $SuccessCount
 * @property int $FailureCount
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $StartedAt
 * @property \Aws\Api\DateTimeResult|null $CompletedAt
 * @property string|null $FailureReason
 * @property string|null $FileName
 * @property 'BULK_CREATE'|'BULK_UPDATE'|null $OperationType
 */
class OpportunityBulkJobSummary extends Shape
{
    /**
     * @param array{
     *     JobId: string,
     *     Status: 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED',
     *     TotalRecords: int,
     *     ProcessedRecords: int,
     *     SuccessCount: int,
     *     FailureCount: int,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     StartedAt?: \Aws\Api\DateTimeResult|null,
     *     CompletedAt?: \Aws\Api\DateTimeResult|null,
     *     FailureReason?: string|null,
     *     FileName?: string|null,
     *     OperationType?: 'BULK_CREATE'|'BULK_UPDATE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
