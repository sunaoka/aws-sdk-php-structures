<?php

namespace Sunaoka\Aws\Structures\Glacier\InitiateVaultLock;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property string $vaultName
 * @property Shapes\VaultLockPolicy $policy
 */
class InitiateVaultLockRequest extends Request
{
    /**
     * @param array{
     *     accountId: string,
     *     vaultName: string,
     *     policy?: Shapes\VaultLockPolicy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
