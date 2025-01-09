<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\GetService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HTTP'|'HTTPS'|'TCP' $Type
 * @property string $ResourcePath
 * @property int<1, 10> $FailureThreshold
 */
class HealthCheckConfig extends Shape
{
    /**
     * @param array{
     *     Type: 'HTTP'|'HTTPS'|'TCP',
     *     ResourcePath?: string,
     *     FailureThreshold?: int<1, 10>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
