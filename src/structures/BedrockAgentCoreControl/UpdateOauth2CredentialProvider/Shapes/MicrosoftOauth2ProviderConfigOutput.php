<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateOauth2CredentialProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Oauth2Discovery $oauthDiscovery
 */
class MicrosoftOauth2ProviderConfigOutput extends Shape
{
    /**
     * @param array{oauthDiscovery: Oauth2Discovery} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
