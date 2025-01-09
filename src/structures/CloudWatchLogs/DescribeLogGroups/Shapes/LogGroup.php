<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeLogGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $logGroupName
 * @property int<0, max> $creationTime
 * @property int $retentionInDays
 * @property int $metricFilterCount
 * @property string $arn
 * @property int<0, max> $storedBytes
 * @property string $kmsKeyId
 * @property 'ACTIVATED'|'DELETED'|'ARCHIVED'|'DISABLED' $dataProtectionStatus
 * @property list<'ACCOUNT_DATA_PROTECTION'> $inheritedProperties
 * @property 'STANDARD'|'INFREQUENT_ACCESS' $logGroupClass
 * @property string $logGroupArn
 */
class LogGroup extends Shape
{
    /**
     * @param array{
     *     logGroupName?: string,
     *     creationTime?: int<0, max>,
     *     retentionInDays?: int,
     *     metricFilterCount?: int,
     *     arn?: string,
     *     storedBytes?: int<0, max>,
     *     kmsKeyId?: string,
     *     dataProtectionStatus?: 'ACTIVATED'|'DELETED'|'ARCHIVED'|'DISABLED',
     *     inheritedProperties?: list<'ACCOUNT_DATA_PROTECTION'>,
     *     logGroupClass?: 'STANDARD'|'INFREQUENT_ACCESS',
     *     logGroupArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
