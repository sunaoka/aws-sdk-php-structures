<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeThingType;

trait DescribeThingTypeTrait
{
    /**
     * @param DescribeThingTypeRequest $args
     * @return DescribeThingTypeResponse
     */
    public function describeThingType(DescribeThingTypeRequest $args)
    {
        $result = parent::describeThingType($args->toArray());
        return new DescribeThingTypeResponse($result->toArray());
    }
}
