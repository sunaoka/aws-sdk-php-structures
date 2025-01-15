<?php

namespace Sunaoka\Aws\Structures\Ses\CreateConfigurationSetTrackingOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CustomRedirectDomain
 */
class TrackingOptions extends Shape
{
    /**
     * @param array{CustomRedirectDomain?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
