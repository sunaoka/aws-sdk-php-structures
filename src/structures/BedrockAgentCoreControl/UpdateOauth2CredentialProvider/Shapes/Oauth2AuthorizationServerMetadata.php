<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateOauth2CredentialProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $issuer
 * @property string $authorizationEndpoint
 * @property string $tokenEndpoint
 * @property list<string>|null $responseTypes
 */
class Oauth2AuthorizationServerMetadata extends Shape
{
    /**
     * @param array{
     *     issuer: string,
     *     authorizationEndpoint: string,
     *     tokenEndpoint: string,
     *     responseTypes?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
