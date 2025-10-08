<?php

namespace Sunaoka\Aws\Structures\AugmentedAIRuntime\DescribeHumanLoop;

trait DescribeHumanLoopTrait
{
    /**
     * @param DescribeHumanLoopRequest $args
     * @return DescribeHumanLoopResponse
     */
    public function describeHumanLoop(DescribeHumanLoopRequest $args)
    {
        $result = parent::describeHumanLoop($args->toArray());
        return new DescribeHumanLoopResponse($result->toArray());
    }
}
