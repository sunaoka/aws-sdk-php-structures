<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListBackups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TableName
 * @property string|null $TableId
 * @property string|null $TableArn
 * @property string|null $BackupArn
 * @property string|null $BackupName
 * @property \Aws\Api\DateTimeResult|null $BackupCreationDateTime
 * @property \Aws\Api\DateTimeResult|null $BackupExpiryDateTime
 * @property 'CREATING'|'DELETED'|'AVAILABLE'|null $BackupStatus
 * @property 'USER'|'SYSTEM'|'AWS_BACKUP'|null $BackupType
 * @property int<0, max>|null $BackupSizeBytes
 */
class BackupSummary extends Shape
{
    /**
     * @param array{
     *     TableName?: string|null,
     *     TableId?: string|null,
     *     TableArn?: string|null,
     *     BackupArn?: string|null,
     *     BackupName?: string|null,
     *     BackupCreationDateTime?: \Aws\Api\DateTimeResult|null,
     *     BackupExpiryDateTime?: \Aws\Api\DateTimeResult|null,
     *     BackupStatus?: 'CREATING'|'DELETED'|'AVAILABLE'|null,
     *     BackupType?: 'USER'|'SYSTEM'|'AWS_BACKUP'|null,
     *     BackupSizeBytes?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
