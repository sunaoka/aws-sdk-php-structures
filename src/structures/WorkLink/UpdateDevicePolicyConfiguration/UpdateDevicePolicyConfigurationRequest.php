<?php

namespace Sunaoka\Aws\Structures\WorkLink\UpdateDevicePolicyConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetArn
 * @property string|null $DeviceCaCertificate
 */
class UpdateDevicePolicyConfigurationRequest extends Request
{
    /**
     * @param array{
     *     FleetArn: string,
     *     DeviceCaCertificate?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
