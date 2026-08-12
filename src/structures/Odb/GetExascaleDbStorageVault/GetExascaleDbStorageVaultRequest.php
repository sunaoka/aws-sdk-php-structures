<?php

namespace Sunaoka\Aws\Structures\Odb\GetExascaleDbStorageVault;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $exascaleDbStorageVaultId
 */
class GetExascaleDbStorageVaultRequest extends Request
{
    /**
     * @param array{exascaleDbStorageVaultId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
