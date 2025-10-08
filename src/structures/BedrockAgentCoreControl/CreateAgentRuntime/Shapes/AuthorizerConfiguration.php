<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateAgentRuntime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomJWTAuthorizerConfiguration|null $customJWTAuthorizer
 */
class AuthorizerConfiguration extends Shape
{
    /**
     * @param array{customJWTAuthorizer?: CustomJWTAuthorizerConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
