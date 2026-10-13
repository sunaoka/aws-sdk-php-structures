<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTrainingSession;

trait DescribeTrainingSessionTrait
{
    /**
     * @param DescribeTrainingSessionRequest $args
     * @return DescribeTrainingSessionResponse
     */
    public function describeTrainingSession(DescribeTrainingSessionRequest $args)
    {
        $result = parent::describeTrainingSession($args->toArray());
        return new DescribeTrainingSessionResponse($result->toArray());
    }
}
