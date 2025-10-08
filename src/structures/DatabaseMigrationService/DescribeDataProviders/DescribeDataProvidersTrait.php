<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeDataProviders;

trait DescribeDataProvidersTrait
{
    /**
     * @param DescribeDataProvidersRequest $args
     * @return DescribeDataProvidersResponse
     */
    public function describeDataProviders(DescribeDataProvidersRequest $args)
    {
        $result = parent::describeDataProviders($args->toArray());
        return new DescribeDataProvidersResponse($result->toArray());
    }
}
