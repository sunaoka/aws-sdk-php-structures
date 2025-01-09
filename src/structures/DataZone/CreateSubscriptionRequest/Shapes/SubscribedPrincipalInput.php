<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateSubscriptionRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SubscribedProjectInput $project
 */
class SubscribedPrincipalInput extends Shape
{
    /**
     * @param array{project?: SubscribedProjectInput} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
