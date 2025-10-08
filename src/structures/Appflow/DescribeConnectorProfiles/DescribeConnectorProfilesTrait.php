<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectorProfiles;

trait DescribeConnectorProfilesTrait
{
    /**
     * @param DescribeConnectorProfilesRequest $args
     * @return DescribeConnectorProfilesResponse
     */
    public function describeConnectorProfiles(DescribeConnectorProfilesRequest $args)
    {
        $result = parent::describeConnectorProfiles($args->toArray());
        return new DescribeConnectorProfilesResponse($result->toArray());
    }
}
