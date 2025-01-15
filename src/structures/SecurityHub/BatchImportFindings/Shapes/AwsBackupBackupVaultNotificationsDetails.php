<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $BackupVaultEvents
 * @property string|null $SnsTopicArn
 */
class AwsBackupBackupVaultNotificationsDetails extends Shape
{
    /**
     * @param array{
     *     BackupVaultEvents?: list<string>|null,
     *     SnsTopicArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
