<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeRetrainingScheduler;

trait DescribeRetrainingSchedulerTrait
{
    /**
     * @param DescribeRetrainingSchedulerRequest $args
     * @return DescribeRetrainingSchedulerResponse
     */
    public function describeRetrainingScheduler(DescribeRetrainingSchedulerRequest $args)
    {
        $result = parent::describeRetrainingScheduler($args->toArray());
        return new DescribeRetrainingSchedulerResponse($result->toArray());
    }
}
