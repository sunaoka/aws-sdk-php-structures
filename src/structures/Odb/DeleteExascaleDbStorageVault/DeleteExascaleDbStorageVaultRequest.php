<?php

namespace Sunaoka\Aws\Structures\Odb\DeleteExascaleDbStorageVault;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $exascaleDbStorageVaultId
 */
class DeleteExascaleDbStorageVaultRequest extends Request
{
    /**
     * @param array{exascaleDbStorageVaultId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
