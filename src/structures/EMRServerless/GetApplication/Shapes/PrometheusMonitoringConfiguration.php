<?php

namespace Sunaoka\Aws\Structures\EMRServerless\GetApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $remoteWriteUrl
 */
class PrometheusMonitoringConfiguration extends Shape
{
    /**
     * @param array{remoteWriteUrl?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
