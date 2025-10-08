<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeThingRegistrationTask;

trait DescribeThingRegistrationTaskTrait
{
    /**
     * @param DescribeThingRegistrationTaskRequest $args
     * @return DescribeThingRegistrationTaskResponse
     */
    public function describeThingRegistrationTask(DescribeThingRegistrationTaskRequest $args)
    {
        $result = parent::describeThingRegistrationTask($args->toArray());
        return new DescribeThingRegistrationTaskResponse($result->toArray());
    }
}
