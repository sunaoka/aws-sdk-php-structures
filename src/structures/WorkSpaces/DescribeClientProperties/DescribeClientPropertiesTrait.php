<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeClientProperties;

trait DescribeClientPropertiesTrait
{
    /**
     * @param DescribeClientPropertiesRequest $args
     * @return DescribeClientPropertiesResponse
     */
    public function describeClientProperties(DescribeClientPropertiesRequest $args)
    {
        $result = parent::describeClientProperties($args->toArray());
        return new DescribeClientPropertiesResponse($result->toArray());
    }
}
