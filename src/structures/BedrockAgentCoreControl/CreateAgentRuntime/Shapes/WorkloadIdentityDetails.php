<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateAgentRuntime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workloadIdentityArn
 */
class WorkloadIdentityDetails extends Shape
{
    /**
     * @param array{workloadIdentityArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
