<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetMobileDeviceAccessEffect;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string|null $DeviceType
 * @property string|null $DeviceModel
 * @property string|null $DeviceOperatingSystem
 * @property string|null $DeviceUserAgent
 */
class GetMobileDeviceAccessEffectRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     DeviceType?: string|null,
     *     DeviceModel?: string|null,
     *     DeviceOperatingSystem?: string|null,
     *     DeviceUserAgent?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
