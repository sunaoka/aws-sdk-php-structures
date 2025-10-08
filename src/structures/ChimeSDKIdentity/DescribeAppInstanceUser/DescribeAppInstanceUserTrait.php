<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\DescribeAppInstanceUser;

trait DescribeAppInstanceUserTrait
{
    /**
     * @param DescribeAppInstanceUserRequest $args
     * @return DescribeAppInstanceUserResponse
     */
    public function describeAppInstanceUser(DescribeAppInstanceUserRequest $args)
    {
        $result = parent::describeAppInstanceUser($args->toArray());
        return new DescribeAppInstanceUserResponse($result->toArray());
    }
}
