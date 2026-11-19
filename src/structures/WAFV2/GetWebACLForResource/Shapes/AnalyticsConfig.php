<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACLForResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CROSS_REGION'|'DISABLED' $Mode
 */
class AnalyticsConfig extends Shape
{
    /**
     * @param array{Mode: 'CROSS_REGION'|'DISABLED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
