<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $logUri
 */
class ParametricS3MonitoringConfiguration extends Shape
{
    /**
     * @param array{logUri?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
