<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\UpdateVPCEConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string $vpceConfigurationName
 * @property string $vpceServiceName
 * @property string $serviceDnsName
 * @property string $vpceConfigurationDescription
 */
class UpdateVPCEConfigurationRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     vpceConfigurationName?: string,
     *     vpceServiceName?: string,
     *     serviceDnsName?: string,
     *     vpceConfigurationDescription?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
