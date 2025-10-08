<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeEndpointTypes;

trait DescribeEndpointTypesTrait
{
    /**
     * @param DescribeEndpointTypesRequest $args
     * @return DescribeEndpointTypesResponse
     */
    public function describeEndpointTypes(DescribeEndpointTypesRequest $args)
    {
        $result = parent::describeEndpointTypes($args->toArray());
        return new DescribeEndpointTypesResponse($result->toArray());
    }
}
