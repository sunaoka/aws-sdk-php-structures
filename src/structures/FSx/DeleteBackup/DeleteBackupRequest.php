<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteBackup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BackupId
 * @property string|null $ClientRequestToken
 */
class DeleteBackupRequest extends Request
{
    /**
     * @param array{
     *     BackupId: string,
     *     ClientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
