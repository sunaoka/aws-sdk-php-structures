<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetVPCEConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $vpceConfigurationName
 * @property string $vpceServiceName
 * @property string $serviceDnsName
 * @property string $vpceConfigurationDescription
 */
class VPCEConfiguration extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     vpceConfigurationName?: string,
     *     vpceServiceName?: string,
     *     serviceDnsName?: string,
     *     vpceConfigurationDescription?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
