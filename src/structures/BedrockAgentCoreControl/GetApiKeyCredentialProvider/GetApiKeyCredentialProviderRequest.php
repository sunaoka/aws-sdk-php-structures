<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetApiKeyCredentialProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class GetApiKeyCredentialProviderRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
