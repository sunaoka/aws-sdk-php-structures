<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeDatastore;

trait DescribeDatastoreTrait
{
    /**
     * @param DescribeDatastoreRequest $args
     * @return DescribeDatastoreResponse
     */
    public function describeDatastore(DescribeDatastoreRequest $args)
    {
        $result = parent::describeDatastore($args->toArray());
        return new DescribeDatastoreResponse($result->toArray());
    }
}
