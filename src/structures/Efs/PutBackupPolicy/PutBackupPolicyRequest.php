<?php

namespace Sunaoka\Aws\Structures\Efs\PutBackupPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileSystemId
 * @property Shapes\BackupPolicy $BackupPolicy
 */
class PutBackupPolicyRequest extends Request
{
    /**
     * @param array{
     *     FileSystemId: string,
     *     BackupPolicy: Shapes\BackupPolicy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
