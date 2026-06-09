<?php

namespace Sunaoka\Aws\Structures\Odb\CreateAutonomousDatabaseWallet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $autonomousDatabaseId
 * @property 'REGIONAL'|'INSTANCE'|null $walletType
 * @property string $password
 * @property string|null $clientToken
 */
class CreateAutonomousDatabaseWalletRequest extends Request
{
    /**
     * @param array{
     *     autonomousDatabaseId: string,
     *     walletType?: 'REGIONAL'|'INSTANCE'|null,
     *     password: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
