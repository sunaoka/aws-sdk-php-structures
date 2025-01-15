<?php

namespace Sunaoka\Aws\Structures\SnowBall\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $PhoneNumber
 * @property string|null $Email
 * @property string|null $IdentificationNumber
 * @property \Aws\Api\DateTimeResult|null $IdentificationExpirationDate
 * @property string|null $IdentificationIssuingOrg
 * @property string|null $DevicePickupId
 */
class PickupDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     PhoneNumber?: string|null,
     *     Email?: string|null,
     *     IdentificationNumber?: string|null,
     *     IdentificationExpirationDate?: \Aws\Api\DateTimeResult|null,
     *     IdentificationIssuingOrg?: string|null,
     *     DevicePickupId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
