<?php

namespace Sunaoka\Aws\Structures\DataZone\RevokeSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SubscribedProject|null $project
 */
class SubscribedPrincipal extends Shape
{
    /**
     * @param array{project?: SubscribedProject|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
