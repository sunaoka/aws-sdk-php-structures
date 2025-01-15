<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\UpdateVPCEConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string|null $vpceConfigurationName
 * @property string|null $vpceServiceName
 * @property string|null $serviceDnsName
 * @property string|null $vpceConfigurationDescription
 */
class UpdateVPCEConfigurationRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     vpceConfigurationName?: string|null,
     *     vpceServiceName?: string|null,
     *     serviceDnsName?: string|null,
     *     vpceConfigurationDescription?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
