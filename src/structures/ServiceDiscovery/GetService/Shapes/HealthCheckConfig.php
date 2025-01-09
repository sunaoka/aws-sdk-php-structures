<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\GetService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HTTP'|'HTTPS'|'TCP' $Type
 * @property string $ResourcePath
 * @property int $FailureThreshold
 */
class HealthCheckConfig extends Shape
{
    /**
     * @param array{
     *     Type: 'HTTP'|'HTTPS'|'TCP',
     *     ResourcePath?: string,
     *     FailureThreshold?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
