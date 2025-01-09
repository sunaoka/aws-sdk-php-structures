<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\CreateDevicePool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ARN'|'PLATFORM'|'FORM_FACTOR'|'MANUFACTURER'|'REMOTE_ACCESS_ENABLED'|'REMOTE_DEBUG_ENABLED'|'APPIUM_VERSION'|'INSTANCE_ARN'|'INSTANCE_LABELS'|'FLEET_TYPE'|'OS_VERSION'|'MODEL'|'AVAILABILITY' $attribute
 * @property 'EQUALS'|'LESS_THAN'|'LESS_THAN_OR_EQUALS'|'GREATER_THAN'|'GREATER_THAN_OR_EQUALS'|'IN'|'NOT_IN'|'CONTAINS' $operator
 * @property string $value
 */
class Rule extends Shape
{
    /**
     * @param array{
     *     attribute?: 'ARN'|'PLATFORM'|'FORM_FACTOR'|'MANUFACTURER'|'REMOTE_ACCESS_ENABLED'|'REMOTE_DEBUG_ENABLED'|'APPIUM_VERSION'|'INSTANCE_ARN'|'INSTANCE_LABELS'|'FLEET_TYPE'|'OS_VERSION'|'MODEL'|'AVAILABILITY',
     *     operator?: 'EQUALS'|'LESS_THAN'|'LESS_THAN_OR_EQUALS'|'GREATER_THAN'|'GREATER_THAN_OR_EQUALS'|'IN'|'NOT_IN'|'CONTAINS',
     *     value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
