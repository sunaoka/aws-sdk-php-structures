<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\SetTokenVaultCMK;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $tokenVaultId
 * @property Shapes\KmsConfiguration $kmsConfiguration
 */
class SetTokenVaultCMKRequest extends Request
{
    /**
     * @param array{
     *     tokenVaultId?: string|null,
     *     kmsConfiguration: Shapes\KmsConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
