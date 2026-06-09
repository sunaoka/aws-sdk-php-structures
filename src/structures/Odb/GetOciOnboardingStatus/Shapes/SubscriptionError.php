<?php

namespace Sunaoka\Aws\Structures\Odb\GetOciOnboardingStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $errorMessage
 */
class SubscriptionError extends Shape
{
    /**
     * @param array{errorMessage?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
