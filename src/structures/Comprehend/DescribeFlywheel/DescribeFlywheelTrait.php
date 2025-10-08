<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeFlywheel;

trait DescribeFlywheelTrait
{
    /**
     * @param DescribeFlywheelRequest $args
     * @return DescribeFlywheelResponse
     */
    public function describeFlywheel(DescribeFlywheelRequest $args)
    {
        $result = parent::describeFlywheel($args->toArray());
        return new DescribeFlywheelResponse($result->toArray());
    }
}
