<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationNfs;

trait DescribeLocationNfsTrait
{
    /**
     * @param DescribeLocationNfsRequest $args
     * @return DescribeLocationNfsResponse
     */
    public function describeLocationNfs(DescribeLocationNfsRequest $args)
    {
        $result = parent::describeLocationNfs($args->toArray());
        return new DescribeLocationNfsResponse($result->toArray());
    }
}
