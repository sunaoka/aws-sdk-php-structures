<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListOrganizationInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REACTIVE'|'PROACTIVE' $Type
 */
class ListInsightsOngoingStatusFilter extends Shape
{
    /**
     * @param array{Type: 'REACTIVE'|'PROACTIVE'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
