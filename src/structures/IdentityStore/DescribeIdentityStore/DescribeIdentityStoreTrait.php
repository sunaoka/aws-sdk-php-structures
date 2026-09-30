<?php

namespace Sunaoka\Aws\Structures\IdentityStore\DescribeIdentityStore;

trait DescribeIdentityStoreTrait
{
    /**
     * @param DescribeIdentityStoreRequest $args
     * @return DescribeIdentityStoreResponse
     */
    public function describeIdentityStore(DescribeIdentityStoreRequest $args)
    {
        $result = parent::describeIdentityStore($args->toArray());
        return new DescribeIdentityStoreResponse($result->toArray());
    }
}
