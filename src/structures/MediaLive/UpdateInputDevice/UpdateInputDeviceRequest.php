<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateInputDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\InputDeviceConfigurableSettings|null $HdDeviceSettings
 * @property string $InputDeviceId
 * @property string|null $Name
 * @property Shapes\InputDeviceConfigurableSettings|null $UhdDeviceSettings
 * @property string|null $AvailabilityZone
 */
class UpdateInputDeviceRequest extends Request
{
    /**
     * @param array{
     *     HdDeviceSettings?: Shapes\InputDeviceConfigurableSettings|null,
     *     InputDeviceId: string,
     *     Name?: string|null,
     *     UhdDeviceSettings?: Shapes\InputDeviceConfigurableSettings|null,
     *     AvailabilityZone?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
