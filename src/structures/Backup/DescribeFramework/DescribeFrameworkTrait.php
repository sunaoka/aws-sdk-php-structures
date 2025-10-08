<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeFramework;

trait DescribeFrameworkTrait
{
    /**
     * @param DescribeFrameworkRequest $args
     * @return DescribeFrameworkResponse
     */
    public function describeFramework(DescribeFrameworkRequest $args)
    {
        $result = parent::describeFramework($args->toArray());
        return new DescribeFrameworkResponse($result->toArray());
    }
}
