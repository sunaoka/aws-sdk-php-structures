<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInventoryDeletions;

trait DescribeInventoryDeletionsTrait
{
    /**
     * @param DescribeInventoryDeletionsRequest $args
     * @return DescribeInventoryDeletionsResponse
     */
    public function describeInventoryDeletions(DescribeInventoryDeletionsRequest $args)
    {
        $result = parent::describeInventoryDeletions($args->toArray());
        return new DescribeInventoryDeletionsResponse($result->toArray());
    }
}
