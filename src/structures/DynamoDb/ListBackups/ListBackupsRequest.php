<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListBackups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableName
 * @property int $Limit
 * @property \Aws\Api\DateTimeResult $TimeRangeLowerBound
 * @property \Aws\Api\DateTimeResult $TimeRangeUpperBound
 * @property string $ExclusiveStartBackupArn
 * @property 'USER'|'SYSTEM'|'AWS_BACKUP'|'ALL' $BackupType
 */
class ListBackupsRequest extends Request
{
    /**
     * @param array{
     *     TableName?: string,
     *     Limit?: int,
     *     TimeRangeLowerBound?: \Aws\Api\DateTimeResult,
     *     TimeRangeUpperBound?: \Aws\Api\DateTimeResult,
     *     ExclusiveStartBackupArn?: string,
     *     BackupType?: 'USER'|'SYSTEM'|'AWS_BACKUP'|'ALL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
