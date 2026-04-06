<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\AssociateDeviceWithNetworkProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceArn
 * @property string $NetworkProfileArn
 */
class AssociateDeviceWithNetworkProfileRequest extends Request
{
    /**
     * @param array{
     *     DeviceArn: string,
     *     NetworkProfileArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
