<?php

namespace Sunaoka\Aws\Structures\LocationService\DescribeMap;

trait DescribeMapTrait
{
    /**
     * @param DescribeMapRequest $args
     * @return DescribeMapResponse
     */
    public function describeMap(DescribeMapRequest $args)
    {
        $result = parent::describeMap($args->toArray());
        return new DescribeMapResponse($result->toArray());
    }
}
