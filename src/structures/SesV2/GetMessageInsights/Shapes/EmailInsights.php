<?php

namespace Sunaoka\Aws\Structures\SesV2\GetMessageInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Destination
 * @property string $Isp
 * @property list<InsightsEvent> $Events
 */
class EmailInsights extends Shape
{
    /**
     * @param array{
     *     Destination?: string,
     *     Isp?: string,
     *     Events?: list<InsightsEvent>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
