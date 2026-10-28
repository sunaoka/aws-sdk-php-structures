<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ResetTokenVaultKeyMaterial;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tokenVaultId
 */
class ResetTokenVaultKeyMaterialRequest extends Request
{
    /**
     * @param array{tokenVaultId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
