<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\DescribeAppInstanceAdmin;

trait DescribeAppInstanceAdminTrait
{
    /**
     * @param DescribeAppInstanceAdminRequest $args
     * @return DescribeAppInstanceAdminResponse
     */
    public function describeAppInstanceAdmin(DescribeAppInstanceAdminRequest $args)
    {
        $result = parent::describeAppInstanceAdmin($args->toArray());
        return new DescribeAppInstanceAdminResponse($result->toArray());
    }
}
