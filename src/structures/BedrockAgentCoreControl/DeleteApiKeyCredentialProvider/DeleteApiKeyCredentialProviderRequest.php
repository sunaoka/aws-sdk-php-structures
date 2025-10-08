<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteApiKeyCredentialProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DeleteApiKeyCredentialProviderRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
