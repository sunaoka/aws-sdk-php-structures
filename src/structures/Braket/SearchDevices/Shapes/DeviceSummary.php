<?php

namespace Sunaoka\Aws\Structures\Braket\SearchDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $deviceArn
 * @property string $deviceName
 * @property 'ONLINE'|'OFFLINE'|'RETIRED' $deviceStatus
 * @property 'QPU'|'SIMULATOR' $deviceType
 * @property string $providerName
 */
class DeviceSummary extends Shape
{
    /**
     * @param array{
     *     deviceArn: string,
     *     deviceName: string,
     *     deviceStatus: 'ONLINE'|'OFFLINE'|'RETIRED',
     *     deviceType: 'QPU'|'SIMULATOR',
     *     providerName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
