<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListCustomerAccountBulkJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Id
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED' $Status
 * @property string|null $FileName
 * @property int $TotalRecords
 * @property int $ProcessedRecords
 * @property int $SuccessCount
 * @property int $FailureCount
 * @property int $DeletedCount
 * @property string|null $FailureReason
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $CompletedAt
 */
class CustomerAccountBulkJobSummary extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Id: string,
     *     Status: 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED',
     *     FileName?: string|null,
     *     TotalRecords: int,
     *     ProcessedRecords: int,
     *     SuccessCount: int,
     *     FailureCount: int,
     *     DeletedCount: int,
     *     FailureReason?: string|null,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     CompletedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
