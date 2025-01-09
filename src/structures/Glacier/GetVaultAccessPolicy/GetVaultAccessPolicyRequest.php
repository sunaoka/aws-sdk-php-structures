<?php

namespace Sunaoka\Aws\Structures\Glacier\GetVaultAccessPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property string $vaultName
 */
class GetVaultAccessPolicyRequest extends Request
{
    /**
     * @param array{
     *     accountId: string,
     *     vaultName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
