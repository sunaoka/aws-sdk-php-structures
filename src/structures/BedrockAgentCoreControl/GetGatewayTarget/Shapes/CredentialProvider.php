<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OAuthCredentialProvider|null $oauthCredentialProvider
 * @property ApiKeyCredentialProvider|null $apiKeyCredentialProvider
 * @property IamCredentialProvider|null $iamCredentialProvider
 */
class CredentialProvider extends Shape
{
    /**
     * @param array{
     *     oauthCredentialProvider?: OAuthCredentialProvider|null,
     *     apiKeyCredentialProvider?: ApiKeyCredentialProvider|null,
     *     iamCredentialProvider?: IamCredentialProvider|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
