<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $authorizationUrl
 * @property string|null $userId
 */
class OAuth2AuthorizationData extends Shape
{
    /**
     * @param array{
     *     authorizationUrl: string,
     *     userId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
