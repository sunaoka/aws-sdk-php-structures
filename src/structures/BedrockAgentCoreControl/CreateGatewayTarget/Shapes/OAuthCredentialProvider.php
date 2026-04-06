<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $providerArn
 * @property list<string> $scopes
 * @property array<string, string>|null $customParameters
 * @property 'CLIENT_CREDENTIALS'|'AUTHORIZATION_CODE'|null $grantType
 * @property string|null $defaultReturnUrl
 */
class OAuthCredentialProvider extends Shape
{
    /**
     * @param array{
     *     providerArn: string,
     *     scopes: list<string>,
     *     customParameters?: array<string, string>|null,
     *     grantType?: 'CLIENT_CREDENTIALS'|'AUTHORIZATION_CODE'|null,
     *     defaultReturnUrl?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
