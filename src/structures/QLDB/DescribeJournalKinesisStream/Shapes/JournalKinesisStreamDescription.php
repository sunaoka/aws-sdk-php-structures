<?php

namespace Sunaoka\Aws\Structures\QLDB\DescribeJournalKinesisStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LedgerName
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $InclusiveStartTime
 * @property \Aws\Api\DateTimeResult|null $ExclusiveEndTime
 * @property string $RoleArn
 * @property string $StreamId
 * @property string|null $Arn
 * @property 'ACTIVE'|'COMPLETED'|'CANCELED'|'FAILED'|'IMPAIRED' $Status
 * @property KinesisConfiguration $KinesisConfiguration
 * @property 'KINESIS_STREAM_NOT_FOUND'|'IAM_PERMISSION_REVOKED'|null $ErrorCause
 * @property string $StreamName
 */
class JournalKinesisStreamDescription extends Shape
{
    /**
     * @param array{
     *     LedgerName: string,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     InclusiveStartTime?: \Aws\Api\DateTimeResult|null,
     *     ExclusiveEndTime?: \Aws\Api\DateTimeResult|null,
     *     RoleArn: string,
     *     StreamId: string,
     *     Arn?: string|null,
     *     Status: 'ACTIVE'|'COMPLETED'|'CANCELED'|'FAILED'|'IMPAIRED',
     *     KinesisConfiguration: KinesisConfiguration,
     *     ErrorCause?: 'KINESIS_STREAM_NOT_FOUND'|'IAM_PERMISSION_REVOKED'|null,
     *     StreamName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
