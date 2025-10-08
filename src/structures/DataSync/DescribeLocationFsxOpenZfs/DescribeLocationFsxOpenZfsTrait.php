<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationFsxOpenZfs;

trait DescribeLocationFsxOpenZfsTrait
{
    /**
     * @param DescribeLocationFsxOpenZfsRequest $args
     * @return DescribeLocationFsxOpenZfsResponse
     */
    public function describeLocationFsxOpenZfs(DescribeLocationFsxOpenZfsRequest $args)
    {
        $result = parent::describeLocationFsxOpenZfs($args->toArray());
        return new DescribeLocationFsxOpenZfsResponse($result->toArray());
    }
}
