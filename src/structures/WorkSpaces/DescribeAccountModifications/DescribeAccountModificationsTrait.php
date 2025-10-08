<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeAccountModifications;

trait DescribeAccountModificationsTrait
{
    /**
     * @param DescribeAccountModificationsRequest $args
     * @return DescribeAccountModificationsResponse
     */
    public function describeAccountModifications(DescribeAccountModificationsRequest $args)
    {
        $result = parent::describeAccountModifications($args->toArray());
        return new DescribeAccountModificationsResponse($result->toArray());
    }
}
