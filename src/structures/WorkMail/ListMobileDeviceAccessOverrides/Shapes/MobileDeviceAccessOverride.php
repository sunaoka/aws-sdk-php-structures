<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListMobileDeviceAccessOverrides\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UserId
 * @property string|null $DeviceId
 * @property 'ALLOW'|'DENY'|null $Effect
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $DateCreated
 * @property \Aws\Api\DateTimeResult|null $DateModified
 */
class MobileDeviceAccessOverride extends Shape
{
    /**
     * @param array{
     *     UserId?: string|null,
     *     DeviceId?: string|null,
     *     Effect?: 'ALLOW'|'DENY'|null,
     *     Description?: string|null,
     *     DateCreated?: \Aws\Api\DateTimeResult|null,
     *     DateModified?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
