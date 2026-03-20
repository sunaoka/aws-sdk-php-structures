<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeQuotaShare;

trait DescribeQuotaShareTrait
{
    /**
     * @param DescribeQuotaShareRequest $args
     * @return DescribeQuotaShareResponse
     */
    public function describeQuotaShare(DescribeQuotaShareRequest $args)
    {
        $result = parent::describeQuotaShare($args->toArray());
        return new DescribeQuotaShareResponse($result->toArray());
    }
}
