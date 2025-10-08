<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateOauth2CredentialProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $discoveryUrl
 * @property Oauth2AuthorizationServerMetadata|null $authorizationServerMetadata
 */
class Oauth2Discovery extends Shape
{
    /**
     * @param array{
     *     discoveryUrl?: string|null,
     *     authorizationServerMetadata?: Oauth2AuthorizationServerMetadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
