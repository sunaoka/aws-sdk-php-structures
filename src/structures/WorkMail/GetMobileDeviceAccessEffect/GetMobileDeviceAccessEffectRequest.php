<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetMobileDeviceAccessEffect;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $DeviceType
 * @property string $DeviceModel
 * @property string $DeviceOperatingSystem
 * @property string $DeviceUserAgent
 */
class GetMobileDeviceAccessEffectRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     DeviceType?: string,
     *     DeviceModel?: string,
     *     DeviceOperatingSystem?: string,
     *     DeviceUserAgent?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
