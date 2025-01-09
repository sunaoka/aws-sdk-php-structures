<?php

namespace Sunaoka\Aws\Structures\QApps\DescribeQAppPermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $userId
 * @property 'owner'|'user' $userType
 * @property string $email
 */
class PrincipalOutput extends Shape
{
    /**
     * @param array{
     *     userId?: string,
     *     userType?: 'owner'|'user',
     *     email?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
