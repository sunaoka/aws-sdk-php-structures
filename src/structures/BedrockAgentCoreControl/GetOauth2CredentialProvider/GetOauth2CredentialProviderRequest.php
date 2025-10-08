<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetOauth2CredentialProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class GetOauth2CredentialProviderRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
