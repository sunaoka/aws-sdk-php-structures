<?php

namespace Sunaoka\Aws\Structures\ECRPublic\GetAuthorizationToken\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $authorizationToken
 * @property \Aws\Api\DateTimeResult|null $expiresAt
 */
class AuthorizationData extends Shape
{
    /**
     * @param array{
     *     authorizationToken?: string|null,
     *     expiresAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
