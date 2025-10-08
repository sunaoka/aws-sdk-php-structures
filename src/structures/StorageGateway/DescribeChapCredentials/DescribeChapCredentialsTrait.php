<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeChapCredentials;

trait DescribeChapCredentialsTrait
{
    /**
     * @param DescribeChapCredentialsRequest $args
     * @return DescribeChapCredentialsResponse
     */
    public function describeChapCredentials(DescribeChapCredentialsRequest $args)
    {
        $result = parent::describeChapCredentials($args->toArray());
        return new DescribeChapCredentialsResponse($result->toArray());
    }
}
