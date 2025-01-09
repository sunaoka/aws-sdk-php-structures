<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateSubscriptionGrantStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $message
 */
class FailureCause extends Shape
{
    /**
     * @param array{message?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
