<?php

namespace Sunaoka\Aws\Structures\Ecr\GetAuthorizationToken\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $authorizationToken
 * @property \Aws\Api\DateTimeResult|null $expiresAt
 * @property string|null $proxyEndpoint
 */
class AuthorizationData extends Shape
{
    /**
     * @param array{
     *     authorizationToken?: string|null,
     *     expiresAt?: \Aws\Api\DateTimeResult|null,
     *     proxyEndpoint?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
