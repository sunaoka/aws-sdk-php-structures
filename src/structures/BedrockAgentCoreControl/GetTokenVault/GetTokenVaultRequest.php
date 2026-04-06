<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetTokenVault;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $tokenVaultId
 */
class GetTokenVaultRequest extends Request
{
    /**
     * @param array{tokenVaultId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
