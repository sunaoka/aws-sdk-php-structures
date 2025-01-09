<?php

namespace Sunaoka\Aws\Structures\Glacier\CompleteVaultLock;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property string $vaultName
 * @property string $lockId
 */
class CompleteVaultLockRequest extends Request
{
    /**
     * @param array{
     *     accountId: string,
     *     vaultName: string,
     *     lockId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
