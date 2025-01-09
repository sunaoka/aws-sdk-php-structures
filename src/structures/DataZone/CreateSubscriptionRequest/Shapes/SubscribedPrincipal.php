<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateSubscriptionRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SubscribedProject $project
 */
class SubscribedPrincipal extends Shape
{
    /**
     * @param array{project?: SubscribedProject} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
