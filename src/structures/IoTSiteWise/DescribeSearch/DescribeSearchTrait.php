<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeSearch;

trait DescribeSearchTrait
{
    /**
     * @param DescribeSearchRequest $args
     * @return DescribeSearchResponse
     */
    public function describeSearch(DescribeSearchRequest $args)
    {
        $result = parent::describeSearch($args->toArray());
        return new DescribeSearchResponse($result->toArray());
    }
}
