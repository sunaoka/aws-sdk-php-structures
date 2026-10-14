<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $agentSpaceArn
 */
class DevOpsAgentConfiguration extends Shape
{
    /**
     * @param array{agentSpaceArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
