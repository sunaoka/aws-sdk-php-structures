<?php

namespace Sunaoka\Aws\Structures\SesV2\PutDeliverabilityDashboardOption\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Global
 * @property list<string>|null $TrackedIsps
 */
class InboxPlacementTrackingOption extends Shape
{
    /**
     * @param array{
     *     Global?: bool|null,
     *     TrackedIsps?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
