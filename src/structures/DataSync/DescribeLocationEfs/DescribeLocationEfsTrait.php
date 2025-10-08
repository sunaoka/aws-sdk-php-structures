<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationEfs;

trait DescribeLocationEfsTrait
{
    /**
     * @param DescribeLocationEfsRequest $args
     * @return DescribeLocationEfsResponse
     */
    public function describeLocationEfs(DescribeLocationEfsRequest $args)
    {
        $result = parent::describeLocationEfs($args->toArray());
        return new DescribeLocationEfsResponse($result->toArray());
    }
}
