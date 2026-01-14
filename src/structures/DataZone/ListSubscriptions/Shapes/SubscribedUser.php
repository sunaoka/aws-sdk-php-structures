<?php

namespace Sunaoka\Aws\Structures\DataZone\ListSubscriptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property UserProfileDetails|null $details
 */
class SubscribedUser extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     details?: UserProfileDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
