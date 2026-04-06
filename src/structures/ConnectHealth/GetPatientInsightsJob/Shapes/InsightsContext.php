<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\GetPatientInsightsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PRE_VISIT' $insightsType
 */
class InsightsContext extends Shape
{
    /**
     * @param array{insightsType: 'PRE_VISIT'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
