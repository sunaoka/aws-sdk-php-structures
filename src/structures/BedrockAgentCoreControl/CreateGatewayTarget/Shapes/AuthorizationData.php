<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OAuth2AuthorizationData|null $oauth2
 */
class AuthorizationData extends Shape
{
    /**
     * @param array{oauth2?: OAuth2AuthorizationData|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
