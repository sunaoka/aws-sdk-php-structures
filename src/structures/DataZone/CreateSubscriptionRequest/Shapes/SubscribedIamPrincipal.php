<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateSubscriptionRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $principalArn
 */
class SubscribedIamPrincipal extends Shape
{
    /**
     * @param array{principalArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
