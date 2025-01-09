<?php

namespace Sunaoka\Aws\Structures\Ecr\GetAuthorizationToken\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $authorizationToken
 * @property \Aws\Api\DateTimeResult $expiresAt
 * @property string $proxyEndpoint
 */
class AuthorizationData extends Shape
{
    /**
     * @param array{
     *     authorizationToken?: string,
     *     expiresAt?: \Aws\Api\DateTimeResult,
     *     proxyEndpoint?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
