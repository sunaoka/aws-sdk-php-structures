<?php

namespace Sunaoka\Aws\Structures\ECRPublic\GetAuthorizationToken\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $authorizationToken
 * @property \Aws\Api\DateTimeResult $expiresAt
 */
class AuthorizationData extends Shape
{
    /**
     * @param array{
     *     authorizationToken?: string,
     *     expiresAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
