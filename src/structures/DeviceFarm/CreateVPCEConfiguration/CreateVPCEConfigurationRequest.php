<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\CreateVPCEConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $vpceConfigurationName
 * @property string $vpceServiceName
 * @property string $serviceDnsName
 * @property string|null $vpceConfigurationDescription
 */
class CreateVPCEConfigurationRequest extends Request
{
    /**
     * @param array{
     *     vpceConfigurationName: string,
     *     vpceServiceName: string,
     *     serviceDnsName: string,
     *     vpceConfigurationDescription?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
