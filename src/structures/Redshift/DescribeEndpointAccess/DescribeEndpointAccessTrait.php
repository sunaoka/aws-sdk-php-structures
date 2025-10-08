<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeEndpointAccess;

trait DescribeEndpointAccessTrait
{
    /**
     * @param DescribeEndpointAccessRequest $args
     * @return DescribeEndpointAccessResponse
     */
    public function describeEndpointAccess(DescribeEndpointAccessRequest $args)
    {
        $result = parent::describeEndpointAccess($args->toArray());
        return new DescribeEndpointAccessResponse($result->toArray());
    }
}
