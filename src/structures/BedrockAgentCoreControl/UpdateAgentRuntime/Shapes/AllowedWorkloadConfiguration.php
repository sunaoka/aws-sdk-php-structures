<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateAgentRuntime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<HostingEnvironment>|null $hostingEnvironments
 * @property list<string>|null $workloadIdentities
 */
class AllowedWorkloadConfiguration extends Shape
{
    /**
     * @param array{
     *     hostingEnvironments?: list<HostingEnvironment>|null,
     *     workloadIdentities?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
