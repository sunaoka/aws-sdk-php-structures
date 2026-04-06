<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeAgentVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Version
 * @property StackConfigurationManager|null $ConfigurationManager
 */
class AgentVersion extends Shape
{
    /**
     * @param array{
     *     Version?: string|null,
     *     ConfigurationManager?: StackConfigurationManager|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
