<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REACTIVE'|'PROACTIVE' $Type
 * @property StartTimeRange $StartTimeRange
 */
class ListInsightsAnyStatusFilter extends Shape
{
    /**
     * @param array{
     *     Type: 'REACTIVE'|'PROACTIVE',
     *     StartTimeRange: StartTimeRange
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
