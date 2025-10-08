<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\DescribeWorkspaceAuthentication;

trait DescribeWorkspaceAuthenticationTrait
{
    /**
     * @param DescribeWorkspaceAuthenticationRequest $args
     * @return DescribeWorkspaceAuthenticationResponse
     */
    public function describeWorkspaceAuthentication(DescribeWorkspaceAuthenticationRequest $args)
    {
        $result = parent::describeWorkspaceAuthentication($args->toArray());
        return new DescribeWorkspaceAuthenticationResponse($result->toArray());
    }
}
