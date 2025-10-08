<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeInferenceScheduler;

trait DescribeInferenceSchedulerTrait
{
    /**
     * @param DescribeInferenceSchedulerRequest $args
     * @return DescribeInferenceSchedulerResponse
     */
    public function describeInferenceScheduler(DescribeInferenceSchedulerRequest $args)
    {
        $result = parent::describeInferenceScheduler($args->toArray());
        return new DescribeInferenceSchedulerResponse($result->toArray());
    }
}
