<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateOauth2CredentialProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Oauth2Discovery $oauthDiscovery
 * @property string|null $clientId
 */
class AtlassianOauth2ProviderConfigOutput extends Shape
{
    /**
     * @param array{
     *     oauthDiscovery: Oauth2Discovery,
     *     clientId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
