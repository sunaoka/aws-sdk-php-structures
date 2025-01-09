<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\PutDeliverabilityDashboardOption\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Global
 * @property list<string> $TrackedIsps
 */
class InboxPlacementTrackingOption extends Shape
{
    /**
     * @param array{
     *     Global?: bool,
     *     TrackedIsps?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
