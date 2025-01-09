<?php

namespace Sunaoka\Aws\Structures\DataZone\GetUserProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $firstName
 * @property string $lastName
 * @property string $username
 */
class SsoUserProfileDetails extends Shape
{
    /**
     * @param array{
     *     firstName?: string,
     *     lastName?: string,
     *     username?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
