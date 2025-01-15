<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListBackups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $TableName
 * @property int<1, 100>|null $Limit
 * @property \Aws\Api\DateTimeResult|null $TimeRangeLowerBound
 * @property \Aws\Api\DateTimeResult|null $TimeRangeUpperBound
 * @property string|null $ExclusiveStartBackupArn
 * @property 'USER'|'SYSTEM'|'AWS_BACKUP'|'ALL'|null $BackupType
 */
class ListBackupsRequest extends Request
{
    /**
     * @param array{
     *     TableName?: string|null,
     *     Limit?: int<1, 100>|null,
     *     TimeRangeLowerBound?: \Aws\Api\DateTimeResult|null,
     *     TimeRangeUpperBound?: \Aws\Api\DateTimeResult|null,
     *     ExclusiveStartBackupArn?: string|null,
     *     BackupType?: 'USER'|'SYSTEM'|'AWS_BACKUP'|'ALL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
