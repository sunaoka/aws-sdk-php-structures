<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetDevicePoolCompatibility\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $message
 * @property 'ARN'|'PLATFORM'|'FORM_FACTOR'|'MANUFACTURER'|'REMOTE_ACCESS_ENABLED'|'REMOTE_DEBUG_ENABLED'|'APPIUM_VERSION'|'INSTANCE_ARN'|'INSTANCE_LABELS'|'FLEET_TYPE'|'OS_VERSION'|'MODEL'|'AVAILABILITY'|null $type
 */
class IncompatibilityMessage extends Shape
{
    /**
     * @param array{
     *     message?: string|null,
     *     type?: 'ARN'|'PLATFORM'|'FORM_FACTOR'|'MANUFACTURER'|'REMOTE_ACCESS_ENABLED'|'REMOTE_DEBUG_ENABLED'|'APPIUM_VERSION'|'INSTANCE_ARN'|'INSTANCE_LABELS'|'FLEET_TYPE'|'OS_VERSION'|'MODEL'|'AVAILABILITY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
