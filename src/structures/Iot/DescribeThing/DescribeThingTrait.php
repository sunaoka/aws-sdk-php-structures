<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeThing;

trait DescribeThingTrait
{
    /**
     * @param DescribeThingRequest $args
     * @return DescribeThingResponse
     */
    public function describeThing(DescribeThingRequest $args)
    {
        $result = parent::describeThing($args->toArray());
        return new DescribeThingResponse($result->toArray());
    }
}
