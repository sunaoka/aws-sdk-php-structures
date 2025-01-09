<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListBackups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TableName
 * @property string $TableId
 * @property string $TableArn
 * @property string $BackupArn
 * @property string $BackupName
 * @property \Aws\Api\DateTimeResult $BackupCreationDateTime
 * @property \Aws\Api\DateTimeResult $BackupExpiryDateTime
 * @property 'CREATING'|'DELETED'|'AVAILABLE' $BackupStatus
 * @property 'USER'|'SYSTEM'|'AWS_BACKUP' $BackupType
 * @property int $BackupSizeBytes
 */
class BackupSummary extends Shape
{
    /**
     * @param array{
     *     TableName?: string,
     *     TableId?: string,
     *     TableArn?: string,
     *     BackupArn?: string,
     *     BackupName?: string,
     *     BackupCreationDateTime?: \Aws\Api\DateTimeResult,
     *     BackupExpiryDateTime?: \Aws\Api\DateTimeResult,
     *     BackupStatus?: 'CREATING'|'DELETED'|'AVAILABLE',
     *     BackupType?: 'USER'|'SYSTEM'|'AWS_BACKUP',
     *     BackupSizeBytes?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
