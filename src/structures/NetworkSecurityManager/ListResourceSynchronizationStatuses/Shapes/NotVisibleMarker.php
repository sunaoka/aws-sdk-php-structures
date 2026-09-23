<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListResourceSynchronizationStatuses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $reason
 */
class NotVisibleMarker extends Shape
{
    /**
     * @param array{reason: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
