<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\CompleteResourceTokenAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $userToken
 * @property string|null $userId
 */
class UserIdentifier extends Shape
{
    /**
     * @param array{
     *     userToken?: string|null,
     *     userId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
