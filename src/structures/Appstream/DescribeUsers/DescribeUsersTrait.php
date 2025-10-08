<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeUsers;

trait DescribeUsersTrait
{
    /**
     * @param DescribeUsersRequest $args
     * @return DescribeUsersResponse
     */
    public function describeUsers(DescribeUsersRequest $args)
    {
        $result = parent::describeUsers($args->toArray());
        return new DescribeUsersResponse($result->toArray());
    }
}
