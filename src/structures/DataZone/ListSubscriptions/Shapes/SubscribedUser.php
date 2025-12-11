<?php

namespace Sunaoka\Aws\Structures\DataZone\ListSubscriptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UserProfileDetails|null $details
 * @property string|null $id
 */
class SubscribedUser extends Shape
{
    /**
     * @param array{
     *     details?: UserProfileDetails|null,
     *     id?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
