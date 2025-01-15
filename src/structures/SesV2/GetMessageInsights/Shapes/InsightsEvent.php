<?php

namespace Sunaoka\Aws\Structures\SesV2\GetMessageInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 * @property 'SEND'|'REJECT'|'BOUNCE'|'COMPLAINT'|'DELIVERY'|'OPEN'|'CLICK'|'RENDERING_FAILURE'|'DELIVERY_DELAY'|'SUBSCRIPTION'|null $Type
 * @property EventDetails|null $Details
 */
class InsightsEvent extends Shape
{
    /**
     * @param array{
     *     Timestamp?: \Aws\Api\DateTimeResult|null,
     *     Type?: 'SEND'|'REJECT'|'BOUNCE'|'COMPLAINT'|'DELIVERY'|'OPEN'|'CLICK'|'RENDERING_FAILURE'|'DELIVERY_DELAY'|'SUBSCRIPTION'|null,
     *     Details?: EventDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
