<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeOAuthClientApplication;

trait DescribeOAuthClientApplicationTrait
{
    /**
     * @param DescribeOAuthClientApplicationRequest $args
     * @return DescribeOAuthClientApplicationResponse
     */
    public function describeOAuthClientApplication(DescribeOAuthClientApplicationRequest $args)
    {
        $result = parent::describeOAuthClientApplication($args->toArray());
        return new DescribeOAuthClientApplicationResponse($result->toArray());
    }
}
