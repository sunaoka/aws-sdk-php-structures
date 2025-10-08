<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeNFSFileShares;

trait DescribeNFSFileSharesTrait
{
    /**
     * @param DescribeNFSFileSharesRequest $args
     * @return DescribeNFSFileSharesResponse
     */
    public function describeNFSFileShares(DescribeNFSFileSharesRequest $args)
    {
        $result = parent::describeNFSFileShares($args->toArray());
        return new DescribeNFSFileSharesResponse($result->toArray());
    }
}
