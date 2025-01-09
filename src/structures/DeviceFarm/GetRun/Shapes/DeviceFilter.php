<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ARN'|'PLATFORM'|'OS_VERSION'|'MODEL'|'AVAILABILITY'|'FORM_FACTOR'|'MANUFACTURER'|'REMOTE_ACCESS_ENABLED'|'REMOTE_DEBUG_ENABLED'|'INSTANCE_ARN'|'INSTANCE_LABELS'|'FLEET_TYPE' $attribute
 * @property 'EQUALS'|'LESS_THAN'|'LESS_THAN_OR_EQUALS'|'GREATER_THAN'|'GREATER_THAN_OR_EQUALS'|'IN'|'NOT_IN'|'CONTAINS' $operator
 * @property list<string> $values
 */
class DeviceFilter extends Shape
{
    /**
     * @param array{
     *     attribute: 'ARN'|'PLATFORM'|'OS_VERSION'|'MODEL'|'AVAILABILITY'|'FORM_FACTOR'|'MANUFACTURER'|'REMOTE_ACCESS_ENABLED'|'REMOTE_DEBUG_ENABLED'|'INSTANCE_ARN'|'INSTANCE_LABELS'|'FLEET_TYPE',
     *     operator: 'EQUALS'|'LESS_THAN'|'LESS_THAN_OR_EQUALS'|'GREATER_THAN'|'GREATER_THAN_OR_EQUALS'|'IN'|'NOT_IN'|'CONTAINS',
     *     values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
