<?php

namespace Sunaoka\Aws\Structures\Sfn\DescribeStateMachine;

trait DescribeStateMachineTrait
{
    /**
     * @param DescribeStateMachineRequest $args
     * @return DescribeStateMachineResponse
     */
    public function describeStateMachine(DescribeStateMachineRequest $args)
    {
        $result = parent::describeStateMachine($args->toArray());
        return new DescribeStateMachineResponse($result->toArray());
    }
}
