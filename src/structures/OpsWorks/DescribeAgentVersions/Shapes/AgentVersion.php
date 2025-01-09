<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeAgentVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Version
 * @property StackConfigurationManager $ConfigurationManager
 */
class AgentVersion extends Shape
{
    /**
     * @param array{
     *     Version?: string,
     *     ConfigurationManager?: StackConfigurationManager
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
