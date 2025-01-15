<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\GetDeviceIdentifier\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $deviceIdentifierArn
 * @property string|null $iccid
 * @property string|null $imsi
 * @property string|null $networkArn
 * @property string|null $orderArn
 * @property 'ACTIVE'|'INACTIVE'|null $status
 * @property string|null $trafficGroupArn
 * @property string|null $vendor
 */
class DeviceIdentifier extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     deviceIdentifierArn?: string|null,
     *     iccid?: string|null,
     *     imsi?: string|null,
     *     networkArn?: string|null,
     *     orderArn?: string|null,
     *     status?: 'ACTIVE'|'INACTIVE'|null,
     *     trafficGroupArn?: string|null,
     *     vendor?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
