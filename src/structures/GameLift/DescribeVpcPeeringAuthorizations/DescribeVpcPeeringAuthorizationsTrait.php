<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeVpcPeeringAuthorizations;

trait DescribeVpcPeeringAuthorizationsTrait
{
    /**
     * @param DescribeVpcPeeringAuthorizationsRequest $args
     * @return DescribeVpcPeeringAuthorizationsResponse
     */
    public function describeVpcPeeringAuthorizations(DescribeVpcPeeringAuthorizationsRequest $args)
    {
        $result = parent::describeVpcPeeringAuthorizations($args->toArray());
        return new DescribeVpcPeeringAuthorizationsResponse($result->toArray());
    }
}
