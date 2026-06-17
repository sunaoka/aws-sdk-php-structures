<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\RegisterService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $tokenName
 * @property string $tokenValue
 * @property string|null $authorizationHeader
 */
class RemoteAgentBearerTokenConfig extends Shape
{
    /**
     * @param array{
     *     tokenName: string,
     *     tokenValue: string,
     *     authorizationHeader?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
