<?php

namespace Sunaoka\Aws\Structures\SnowBall\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $PhoneNumber
 * @property string $Email
 * @property string $IdentificationNumber
 * @property \Aws\Api\DateTimeResult $IdentificationExpirationDate
 * @property string $IdentificationIssuingOrg
 * @property string $DevicePickupId
 */
class PickupDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     PhoneNumber?: string,
     *     Email?: string,
     *     IdentificationNumber?: string,
     *     IdentificationExpirationDate?: \Aws\Api\DateTimeResult,
     *     IdentificationIssuingOrg?: string,
     *     DevicePickupId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
