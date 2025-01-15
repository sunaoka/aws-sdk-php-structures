<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\CreateResponsePlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PagerDutyConfiguration|null $pagerDutyConfiguration
 */
class Integration extends Shape
{
    /**
     * @param array{pagerDutyConfiguration?: PagerDutyConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
