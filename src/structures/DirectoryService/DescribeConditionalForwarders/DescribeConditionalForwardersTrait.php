<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeConditionalForwarders;

trait DescribeConditionalForwardersTrait
{
    /**
     * @param DescribeConditionalForwardersRequest $args
     * @return DescribeConditionalForwardersResponse
     */
    public function describeConditionalForwarders(DescribeConditionalForwardersRequest $args)
    {
        $result = parent::describeConditionalForwarders($args->toArray());
        return new DescribeConditionalForwardersResponse($result->toArray());
    }
}
