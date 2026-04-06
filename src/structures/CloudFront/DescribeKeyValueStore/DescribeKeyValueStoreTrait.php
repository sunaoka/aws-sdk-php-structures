<?php

namespace Sunaoka\Aws\Structures\CloudFront\DescribeKeyValueStore;

trait DescribeKeyValueStoreTrait
{
    /**
     * @param DescribeKeyValueStoreRequest $args
     * @return DescribeKeyValueStoreResponse
     */
    public function describeKeyValueStore(DescribeKeyValueStoreRequest $args)
    {
        $result = parent::describeKeyValueStore($args->toArray());
        return new DescribeKeyValueStoreResponse($result->toArray());
    }
}
