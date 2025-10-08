<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeUserImportJob;

trait DescribeUserImportJobTrait
{
    /**
     * @param DescribeUserImportJobRequest $args
     * @return DescribeUserImportJobResponse
     */
    public function describeUserImportJob(DescribeUserImportJobRequest $args)
    {
        $result = parent::describeUserImportJob($args->toArray());
        return new DescribeUserImportJobResponse($result->toArray());
    }
}
