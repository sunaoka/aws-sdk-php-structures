<?php

namespace Sunaoka\Aws\Structures\SesV2\GetMessageInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Destination
 * @property string|null $Isp
 * @property list<InsightsEvent>|null $Events
 */
class EmailInsights extends Shape
{
    /**
     * @param array{
     *     Destination?: string|null,
     *     Isp?: string|null,
     *     Events?: list<InsightsEvent>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
