<?php

namespace Sunaoka\Aws\Structures\Glacier\RemoveTagsFromVault;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property string $vaultName
 * @property list<string> $TagKeys
 */
class RemoveTagsFromVaultRequest extends Request
{
    /**
     * @param array{
     *     accountId: string,
     *     vaultName: string,
     *     TagKeys?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
