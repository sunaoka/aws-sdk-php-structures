<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetDevicePoolCompatibility\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $manufacturer
 * @property string $model
 * @property string $modelId
 * @property 'PHONE'|'TABLET' $formFactor
 * @property 'ANDROID'|'IOS' $platform
 * @property string $os
 * @property CPU $cpu
 * @property Resolution $resolution
 * @property int $heapSize
 * @property int $memory
 * @property string $image
 * @property string $carrier
 * @property string $radio
 * @property bool $remoteAccessEnabled
 * @property bool $remoteDebugEnabled
 * @property string $fleetType
 * @property string $fleetName
 * @property list<DeviceInstance> $instances
 * @property 'TEMPORARY_NOT_AVAILABLE'|'BUSY'|'AVAILABLE'|'HIGHLY_AVAILABLE' $availability
 */
class Device extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     name?: string,
     *     manufacturer?: string,
     *     model?: string,
     *     modelId?: string,
     *     formFactor?: 'PHONE'|'TABLET',
     *     platform?: 'ANDROID'|'IOS',
     *     os?: string,
     *     cpu?: CPU,
     *     resolution?: Resolution,
     *     heapSize?: int,
     *     memory?: int,
     *     image?: string,
     *     carrier?: string,
     *     radio?: string,
     *     remoteAccessEnabled?: bool,
     *     remoteDebugEnabled?: bool,
     *     fleetType?: string,
     *     fleetName?: string,
     *     instances?: list<DeviceInstance>,
     *     availability?: 'TEMPORARY_NOT_AVAILABLE'|'BUSY'|'AVAILABLE'|'HIGHLY_AVAILABLE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
