<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeLogGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $logGroupName
 * @property int<0, max>|null $creationTime
 * @property int|null $retentionInDays
 * @property int|null $metricFilterCount
 * @property string|null $arn
 * @property int<0, max>|null $storedBytes
 * @property string|null $kmsKeyId
 * @property 'ACTIVATED'|'DELETED'|'ARCHIVED'|'DISABLED'|null $dataProtectionStatus
 * @property list<'ACCOUNT_DATA_PROTECTION'>|null $inheritedProperties
 * @property 'STANDARD'|'INFREQUENT_ACCESS'|'DELIVERY'|null $logGroupClass
 * @property string|null $logGroupArn
 * @property bool|null $deletionProtectionEnabled
 */
class LogGroup extends Shape
{
    /**
     * @param array{
     *     logGroupName?: string|null,
     *     creationTime?: int<0, max>|null,
     *     retentionInDays?: int|null,
     *     metricFilterCount?: int|null,
     *     arn?: string|null,
     *     storedBytes?: int<0, max>|null,
     *     kmsKeyId?: string|null,
     *     dataProtectionStatus?: 'ACTIVATED'|'DELETED'|'ARCHIVED'|'DISABLED'|null,
     *     inheritedProperties?: list<'ACCOUNT_DATA_PROTECTION'>|null,
     *     logGroupClass?: 'STANDARD'|'INFREQUENT_ACCESS'|'DELIVERY'|null,
     *     logGroupArn?: string|null,
     *     deletionProtectionEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
