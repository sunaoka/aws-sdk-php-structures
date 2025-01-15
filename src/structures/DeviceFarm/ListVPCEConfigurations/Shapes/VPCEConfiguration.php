<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListVPCEConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $vpceConfigurationName
 * @property string|null $vpceServiceName
 * @property string|null $serviceDnsName
 * @property string|null $vpceConfigurationDescription
 */
class VPCEConfiguration extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     vpceConfigurationName?: string|null,
     *     vpceServiceName?: string|null,
     *     serviceDnsName?: string|null,
     *     vpceConfigurationDescription?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
