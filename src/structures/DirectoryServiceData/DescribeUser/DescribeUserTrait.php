<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\DescribeUser;

trait DescribeUserTrait
{
    /**
     * @param DescribeUserRequest $args
     * @return DescribeUserResponse
     */
    public function describeUser(DescribeUserRequest $args)
    {
        $result = parent::describeUser($args->toArray());
        return new DescribeUserResponse($result->toArray());
    }
}
