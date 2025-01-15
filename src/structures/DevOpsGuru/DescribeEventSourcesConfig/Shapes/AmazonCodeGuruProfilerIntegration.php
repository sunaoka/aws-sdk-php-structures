<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeEventSourcesConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $Status
 */
class AmazonCodeGuruProfilerIntegration extends Shape
{
    /**
     * @param array{Status?: 'ENABLED'|'DISABLED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
