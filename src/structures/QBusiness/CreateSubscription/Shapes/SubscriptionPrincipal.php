<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $user
 * @property string|null $group
 */
class SubscriptionPrincipal extends Shape
{
    /**
     * @param array{
     *     user?: string|null,
     *     group?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
