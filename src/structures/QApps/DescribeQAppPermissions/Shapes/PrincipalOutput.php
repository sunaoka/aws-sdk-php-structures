<?php

namespace Sunaoka\Aws\Structures\QApps\DescribeQAppPermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $userId
 * @property 'owner'|'user'|null $userType
 * @property string|null $email
 */
class PrincipalOutput extends Shape
{
    /**
     * @param array{
     *     userId?: string|null,
     *     userType?: 'owner'|'user'|null,
     *     email?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
