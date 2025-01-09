<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListMobileDeviceAccessOverrides\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserId
 * @property string $DeviceId
 * @property 'ALLOW'|'DENY' $Effect
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $DateCreated
 * @property \Aws\Api\DateTimeResult $DateModified
 */
class MobileDeviceAccessOverride extends Shape
{
    /**
     * @param array{
     *     UserId?: string,
     *     DeviceId?: string,
     *     Effect?: 'ALLOW'|'DENY',
     *     Description?: string,
     *     DateCreated?: \Aws\Api\DateTimeResult,
     *     DateModified?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
