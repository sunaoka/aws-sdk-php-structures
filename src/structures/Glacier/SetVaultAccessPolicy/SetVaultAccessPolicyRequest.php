<?php

namespace Sunaoka\Aws\Structures\Glacier\SetVaultAccessPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property string $vaultName
 * @property Shapes\VaultAccessPolicy|null $policy
 */
class SetVaultAccessPolicyRequest extends Request
{
    /**
     * @param array{
     *     accountId: string,
     *     vaultName: string,
     *     policy?: Shapes\VaultAccessPolicy|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
