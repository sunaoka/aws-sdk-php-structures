<?php

namespace Sunaoka\Aws\Structures\DataPipeline\DescribeObjects;

trait DescribeObjectsTrait
{
    /**
     * @param DescribeObjectsRequest $args
     * @return DescribeObjectsResponse
     */
    public function describeObjects(DescribeObjectsRequest $args)
    {
        $result = parent::describeObjects($args->toArray());
        return new DescribeObjectsResponse($result->toArray());
    }
}
