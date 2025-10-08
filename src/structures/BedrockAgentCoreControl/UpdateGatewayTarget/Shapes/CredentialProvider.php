<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OAuthCredentialProvider|null $oauthCredentialProvider
 * @property ApiKeyCredentialProvider|null $apiKeyCredentialProvider
 */
class CredentialProvider extends Shape
{
    /**
     * @param array{
     *     oauthCredentialProvider?: OAuthCredentialProvider|null,
     *     apiKeyCredentialProvider?: ApiKeyCredentialProvider|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
