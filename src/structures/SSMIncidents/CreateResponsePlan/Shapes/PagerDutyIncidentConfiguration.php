<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\CreateResponsePlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serviceId
 */
class PagerDutyIncidentConfiguration extends Shape
{
    /**
     * @param array{serviceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
