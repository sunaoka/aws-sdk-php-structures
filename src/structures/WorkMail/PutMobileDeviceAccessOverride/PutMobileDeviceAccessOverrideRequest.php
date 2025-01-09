<?php

namespace Sunaoka\Aws\Structures\WorkMail\PutMobileDeviceAccessOverride;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $UserId
 * @property string $DeviceId
 * @property 'ALLOW'|'DENY' $Effect
 * @property string $Description
 */
class PutMobileDeviceAccessOverrideRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     UserId: string,
     *     DeviceId: string,
     *     Effect: 'ALLOW'|'DENY',
     *     Description?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
