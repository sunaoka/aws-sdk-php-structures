<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\CreateConfigurationSet\Shapes;

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
