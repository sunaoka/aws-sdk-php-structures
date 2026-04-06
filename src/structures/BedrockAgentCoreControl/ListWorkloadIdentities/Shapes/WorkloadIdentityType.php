<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListWorkloadIdentities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $workloadIdentityArn
 */
class WorkloadIdentityType extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     workloadIdentityArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
