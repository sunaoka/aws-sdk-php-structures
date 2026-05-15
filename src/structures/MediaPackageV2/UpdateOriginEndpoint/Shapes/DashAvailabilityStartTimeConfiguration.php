<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\UpdateOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $FixedAvailabilityStartTime
 */
class DashAvailabilityStartTimeConfiguration extends Shape
{
    /**
     * @param array{FixedAvailabilityStartTime?: \Aws\Api\DateTimeResult|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
