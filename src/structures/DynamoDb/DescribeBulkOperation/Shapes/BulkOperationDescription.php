<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeBulkOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BulkOperationArn
 * @property 'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'CANCELLING'|'CANCELLED'|'FAILED'|null $BulkOperationStatus
 * @property list<BulkOperationTableDetail>|null $TableDetails
 * @property string|null $ClientToken
 * @property InputS3Configuration|null $InputS3Configuration
 * @property OutputS3Configuration|null $OutputS3Configuration
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property int<0, max>|null $ProcessedItemCount
 * @property int<0, max>|null $ProcessedInputBytes
 * @property int<0, max>|null $TotalInputBytes
 * @property list<BulkOperationUsage>|null $BulkOperationUsage
 * @property int<0, max>|null $FailedItemCount
 * @property string|null $FailureCode
 * @property string|null $FailureMessage
 * @property int<1024, max>|null $MaxWriteRequestUnits
 * @property 'STANDARD'|'ACCELERATED'|null $PerformanceTier
 */
class BulkOperationDescription extends Shape
{
    /**
     * @param array{
     *     BulkOperationArn?: string|null,
     *     BulkOperationStatus?: 'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'CANCELLING'|'CANCELLED'|'FAILED'|null,
     *     TableDetails?: list<BulkOperationTableDetail>|null,
     *     ClientToken?: string|null,
     *     InputS3Configuration?: InputS3Configuration|null,
     *     OutputS3Configuration?: OutputS3Configuration|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     ProcessedItemCount?: int<0, max>|null,
     *     ProcessedInputBytes?: int<0, max>|null,
     *     TotalInputBytes?: int<0, max>|null,
     *     BulkOperationUsage?: list<BulkOperationUsage>|null,
     *     FailedItemCount?: int<0, max>|null,
     *     FailureCode?: string|null,
     *     FailureMessage?: string|null,
     *     MaxWriteRequestUnits?: int<1024, max>|null,
     *     PerformanceTier?: 'STANDARD'|'ACCELERATED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
