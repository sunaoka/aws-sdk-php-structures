<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $BackupVaultEvents
 * @property string $SnsTopicArn
 */
class AwsBackupBackupVaultNotificationsDetails extends Shape
{
    /**
     * @param array{
     *     BackupVaultEvents?: list<string>,
     *     SnsTopicArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
