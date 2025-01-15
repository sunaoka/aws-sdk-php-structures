<?php

namespace Sunaoka\Aws\Structures\Glacier\AddTagsToVault;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property string $vaultName
 * @property array<string, string>|null $Tags
 */
class AddTagsToVaultRequest extends Request
{
    /**
     * @param array{
     *     accountId: string,
     *     vaultName: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
