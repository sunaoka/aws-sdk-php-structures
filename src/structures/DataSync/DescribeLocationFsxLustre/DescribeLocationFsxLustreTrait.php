<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeLocationFsxLustre;

trait DescribeLocationFsxLustreTrait
{
    /**
     * @param DescribeLocationFsxLustreRequest $args
     * @return DescribeLocationFsxLustreResponse
     */
    public function describeLocationFsxLustre(DescribeLocationFsxLustreRequest $args)
    {
        $result = parent::describeLocationFsxLustre($args->toArray());
        return new DescribeLocationFsxLustreResponse($result->toArray());
    }
}
