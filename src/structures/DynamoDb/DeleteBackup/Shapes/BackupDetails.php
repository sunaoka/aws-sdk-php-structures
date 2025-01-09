<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DeleteBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BackupArn
 * @property string $BackupName
 * @property int<0, max> $BackupSizeBytes
 * @property 'CREATING'|'DELETED'|'AVAILABLE' $BackupStatus
 * @property 'USER'|'SYSTEM'|'AWS_BACKUP' $BackupType
 * @property \Aws\Api\DateTimeResult $BackupCreationDateTime
 * @property \Aws\Api\DateTimeResult $BackupExpiryDateTime
 */
class BackupDetails extends Shape
{
    /**
     * @param array{
     *     BackupArn: string,
     *     BackupName: string,
     *     BackupSizeBytes?: int<0, max>,
     *     BackupStatus: 'CREATING'|'DELETED'|'AVAILABLE',
     *     BackupType: 'USER'|'SYSTEM'|'AWS_BACKUP',
     *     BackupCreationDateTime: \Aws\Api\DateTimeResult,
     *     BackupExpiryDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
