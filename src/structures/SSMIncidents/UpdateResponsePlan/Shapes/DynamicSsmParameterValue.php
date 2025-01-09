<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\UpdateResponsePlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INCIDENT_RECORD_ARN'|'INVOLVED_RESOURCES' $variable
 */
class DynamicSsmParameterValue extends Shape
{
    /**
     * @param array{variable?: 'INCIDENT_RECORD_ARN'|'INVOLVED_RESOURCES'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
