<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeEventSourcesConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AmazonCodeGuruProfilerIntegration|null $AmazonCodeGuruProfiler
 */
class EventSourcesConfig extends Shape
{
    /**
     * @param array{AmazonCodeGuruProfiler?: AmazonCodeGuruProfilerIntegration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
