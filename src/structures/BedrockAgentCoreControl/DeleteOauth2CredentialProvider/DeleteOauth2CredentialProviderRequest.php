<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteOauth2CredentialProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DeleteOauth2CredentialProviderRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
