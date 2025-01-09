<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteDBClusterAutomatedBackup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DbClusterResourceId
 */
class DeleteDBClusterAutomatedBackupRequest extends Request
{
    /**
     * @param array{DbClusterResourceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
