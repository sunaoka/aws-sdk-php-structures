<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\DescribeProfilingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $profilingEnabled
 */
class AgentOrchestrationConfig extends Shape
{
    /**
     * @param array{profilingEnabled: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
