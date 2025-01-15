<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\ListServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HTTP'|'HTTPS'|'TCP' $Type
 * @property string|null $ResourcePath
 * @property int<1, 10>|null $FailureThreshold
 */
class HealthCheckConfig extends Shape
{
    /**
     * @param array{
     *     Type: 'HTTP'|'HTTPS'|'TCP',
     *     ResourcePath?: string|null,
     *     FailureThreshold?: int<1, 10>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
