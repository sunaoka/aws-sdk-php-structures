<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\ListDeviceIdentifiers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $deviceIdentifierArn
 * @property string $iccid
 * @property string $imsi
 * @property string $networkArn
 * @property string $orderArn
 * @property 'ACTIVE'|'INACTIVE' $status
 * @property string $trafficGroupArn
 * @property string $vendor
 */
class DeviceIdentifier extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     deviceIdentifierArn?: string,
     *     iccid?: string,
     *     imsi?: string,
     *     networkArn?: string,
     *     orderArn?: string,
     *     status?: 'ACTIVE'|'INACTIVE',
     *     trafficGroupArn?: string,
     *     vendor?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
