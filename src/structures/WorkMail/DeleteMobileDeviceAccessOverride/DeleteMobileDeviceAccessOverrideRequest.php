<?php

namespace Sunaoka\Aws\Structures\WorkMail\DeleteMobileDeviceAccessOverride;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $UserId
 * @property string $DeviceId
 */
class DeleteMobileDeviceAccessOverrideRequest extends Request
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
