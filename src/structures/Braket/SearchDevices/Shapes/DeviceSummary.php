<?php

namespace Sunaoka\Aws\Structures\Braket\SearchDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $deviceArn
 * @property string $deviceName
 * @property string $providerName
 * @property 'QPU'|'SIMULATOR' $deviceType
 * @property 'ONLINE'|'OFFLINE'|'RETIRED' $deviceStatus
 */
class DeviceSummary extends Shape
{
    /**
     * @param array{
     *     deviceArn: string,
     *     deviceName: string,
     *     providerName: string,
     *     deviceType: 'QPU'|'SIMULATOR',
     *     deviceStatus: 'ONLINE'|'OFFLINE'|'RETIRED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
