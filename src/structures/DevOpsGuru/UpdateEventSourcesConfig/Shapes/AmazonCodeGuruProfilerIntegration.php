<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\UpdateEventSourcesConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $Status
 */
class AmazonCodeGuruProfilerIntegration extends Shape
{
    /**
     * @param array{Status?: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
