<?php

namespace Sunaoka\Aws\Structures\Odb\CreateAutonomousDatabaseWallet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $autonomousDatabaseId
 * @property 'REGIONAL'|'INSTANCE'|null $walletType
 * @property string|null $password
 * @property 'CUSTOMER_MANAGED_AWS_SECRET'|'API_REQUEST_PARAMETER'|null $passwordSource
 * @property Shapes\WalletPasswordSourceConfigurationInput|null $passwordSourceConfiguration
 * @property string|null $clientToken
 */
class CreateAutonomousDatabaseWalletRequest extends Request
{
    /**
     * @param array{
     *     autonomousDatabaseId: string,
     *     walletType?: 'REGIONAL'|'INSTANCE'|null,
     *     password?: string|null,
     *     passwordSource?: 'CUSTOMER_MANAGED_AWS_SECRET'|'API_REQUEST_PARAMETER'|null,
     *     passwordSourceConfiguration?: Shapes\WalletPasswordSourceConfigurationInput|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
