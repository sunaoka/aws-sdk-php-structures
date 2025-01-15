<?php

namespace Sunaoka\Aws\Structures\Emr\AddJobFlowSteps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobFlowId
 * @property list<Shapes\StepConfig> $Steps
 * @property string|null $ExecutionRoleArn
 */
class AddJobFlowStepsRequest extends Request
{
    /**
     * @param array{
     *     JobFlowId: string,
     *     Steps: list<Shapes\StepConfig>,
     *     ExecutionRoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
