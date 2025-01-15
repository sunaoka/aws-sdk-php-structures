<?php

namespace Sunaoka\Aws\Structures\SSO\GetRoleCredentials\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accessKeyId
 * @property string|null $secretAccessKey
 * @property string|null $sessionToken
 * @property int|null $expiration
 */
class RoleCredentials extends Shape
{
    /**
     * @param array{
     *     accessKeyId?: string|null,
     *     secretAccessKey?: string|null,
     *     sessionToken?: string|null,
     *     expiration?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
