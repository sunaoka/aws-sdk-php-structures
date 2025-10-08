<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectors;

trait DescribeConnectorsTrait
{
    /**
     * @param DescribeConnectorsRequest $args
     * @return DescribeConnectorsResponse
     */
    public function describeConnectors(DescribeConnectorsRequest $args)
    {
        $result = parent::describeConnectors($args->toArray());
        return new DescribeConnectorsResponse($result->toArray());
    }
}
