<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeSchedule;

trait DescribeScheduleTrait
{
    /**
     * @param DescribeScheduleRequest $args
     * @return DescribeScheduleResponse
     */
    public function describeSchedule(DescribeScheduleRequest $args)
    {
        $result = parent::describeSchedule($args->toArray());
        return new DescribeScheduleResponse($result->toArray());
    }
}
