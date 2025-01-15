<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetDevicePoolCompatibility\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $manufacturer
 * @property string|null $model
 * @property string|null $modelId
 * @property 'PHONE'|'TABLET'|null $formFactor
 * @property 'ANDROID'|'IOS'|null $platform
 * @property string|null $os
 * @property CPU|null $cpu
 * @property Resolution|null $resolution
 * @property int|null $heapSize
 * @property int|null $memory
 * @property string|null $image
 * @property string|null $carrier
 * @property string|null $radio
 * @property bool|null $remoteAccessEnabled
 * @property bool|null $remoteDebugEnabled
 * @property string|null $fleetType
 * @property string|null $fleetName
 * @property list<DeviceInstance>|null $instances
 * @property 'TEMPORARY_NOT_AVAILABLE'|'BUSY'|'AVAILABLE'|'HIGHLY_AVAILABLE'|null $availability
 */
class Device extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     manufacturer?: string|null,
     *     model?: string|null,
     *     modelId?: string|null,
     *     formFactor?: 'PHONE'|'TABLET'|null,
     *     platform?: 'ANDROID'|'IOS'|null,
     *     os?: string|null,
     *     cpu?: CPU|null,
     *     resolution?: Resolution|null,
     *     heapSize?: int|null,
     *     memory?: int|null,
     *     image?: string|null,
     *     carrier?: string|null,
     *     radio?: string|null,
     *     remoteAccessEnabled?: bool|null,
     *     remoteDebugEnabled?: bool|null,
     *     fleetType?: string|null,
     *     fleetName?: string|null,
     *     instances?: list<DeviceInstance>|null,
     *     availability?: 'TEMPORARY_NOT_AVAILABLE'|'BUSY'|'AVAILABLE'|'HIGHLY_AVAILABLE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
