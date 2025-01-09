<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateInputDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\InputDeviceConfigurableSettings $HdDeviceSettings
 * @property string $InputDeviceId
 * @property string $Name
 * @property Shapes\InputDeviceConfigurableSettings $UhdDeviceSettings
 * @property string $AvailabilityZone
 */
class UpdateInputDeviceRequest extends Request
{
    /**
     * @param array{
     *     HdDeviceSettings?: Shapes\InputDeviceConfigurableSettings,
     *     InputDeviceId: string,
     *     Name?: string,
     *     UhdDeviceSettings?: Shapes\InputDeviceConfigurableSettings,
     *     AvailabilityZone?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
