<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListOrganizationInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REACTIVE'|'PROACTIVE' $Type
 * @property EndTimeRange $EndTimeRange
 */
class ListInsightsClosedStatusFilter extends Shape
{
    /**
     * @param array{
     *     Type: 'REACTIVE'|'PROACTIVE',
     *     EndTimeRange: EndTimeRange
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
