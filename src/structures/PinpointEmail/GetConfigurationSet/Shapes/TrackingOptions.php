<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetConfigurationSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CustomRedirectDomain
 */
class TrackingOptions extends Shape
{
    /**
     * @param array{CustomRedirectDomain: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
