<?php

namespace Sunaoka\Aws\Structures\QLDB\DescribeJournalKinesisStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LedgerName
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $InclusiveStartTime
 * @property \Aws\Api\DateTimeResult $ExclusiveEndTime
 * @property string $RoleArn
 * @property string $StreamId
 * @property string $Arn
 * @property 'ACTIVE'|'COMPLETED'|'CANCELED'|'FAILED'|'IMPAIRED' $Status
 * @property KinesisConfiguration $KinesisConfiguration
 * @property 'KINESIS_STREAM_NOT_FOUND'|'IAM_PERMISSION_REVOKED' $ErrorCause
 * @property string $StreamName
 */
class JournalKinesisStreamDescription extends Shape
{
    /**
     * @param array{
     *     LedgerName: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     InclusiveStartTime?: \Aws\Api\DateTimeResult,
     *     ExclusiveEndTime?: \Aws\Api\DateTimeResult,
     *     RoleArn: string,
     *     StreamId: string,
     *     Arn?: string,
     *     Status: 'ACTIVE'|'COMPLETED'|'CANCELED'|'FAILED'|'IMPAIRED',
     *     KinesisConfiguration: KinesisConfiguration,
     *     ErrorCause?: 'KINESIS_STREAM_NOT_FOUND'|'IAM_PERMISSION_REVOKED',
     *     StreamName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
