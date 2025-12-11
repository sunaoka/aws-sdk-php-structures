<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateSubscriptionRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $firstName
 * @property string|null $lastName
 * @property string|null $username
 */
class SsoUserProfileDetails extends Shape
{
    /**
     * @param array{
     *     firstName?: string|null,
     *     lastName?: string|null,
     *     username?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
