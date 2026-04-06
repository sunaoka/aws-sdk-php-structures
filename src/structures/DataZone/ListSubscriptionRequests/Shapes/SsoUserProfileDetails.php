<?php

namespace Sunaoka\Aws\Structures\DataZone\ListSubscriptionRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $username
 * @property string|null $firstName
 * @property string|null $lastName
 */
class SsoUserProfileDetails extends Shape
{
    /**
     * @param array{
     *     username?: string|null,
     *     firstName?: string|null,
     *     lastName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
