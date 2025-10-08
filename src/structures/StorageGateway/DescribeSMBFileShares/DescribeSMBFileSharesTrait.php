<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeSMBFileShares;

trait DescribeSMBFileSharesTrait
{
    /**
     * @param DescribeSMBFileSharesRequest $args
     * @return DescribeSMBFileSharesResponse
     */
    public function describeSMBFileShares(DescribeSMBFileSharesRequest $args)
    {
        $result = parent::describeSMBFileShares($args->toArray());
        return new DescribeSMBFileSharesResponse($result->toArray());
    }
}
