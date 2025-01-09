<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetMobileDeviceAccessOverride;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $UserId
 * @property string $DeviceId
 */
class GetMobileDeviceAccessOverrideRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     UserId: string,
     *     DeviceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
