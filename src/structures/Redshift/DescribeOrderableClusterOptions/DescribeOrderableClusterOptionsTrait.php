<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeOrderableClusterOptions;

trait DescribeOrderableClusterOptionsTrait
{
    /**
     * @param DescribeOrderableClusterOptionsRequest $args
     * @return DescribeOrderableClusterOptionsResponse
     */
    public function describeOrderableClusterOptions(DescribeOrderableClusterOptionsRequest $args)
    {
        $result = parent::describeOrderableClusterOptions($args->toArray());
        return new DescribeOrderableClusterOptionsResponse($result->toArray());
    }
}
