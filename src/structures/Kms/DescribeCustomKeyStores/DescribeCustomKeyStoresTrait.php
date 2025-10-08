<?php

namespace Sunaoka\Aws\Structures\Kms\DescribeCustomKeyStores;

trait DescribeCustomKeyStoresTrait
{
    /**
     * @param DescribeCustomKeyStoresRequest $args
     * @return DescribeCustomKeyStoresResponse
     */
    public function describeCustomKeyStores(DescribeCustomKeyStoresRequest $args)
    {
        $result = parent::describeCustomKeyStores($args->toArray());
        return new DescribeCustomKeyStoresResponse($result->toArray());
    }
}
