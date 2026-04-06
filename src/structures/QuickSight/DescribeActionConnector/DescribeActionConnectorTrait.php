<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeActionConnector;

trait DescribeActionConnectorTrait
{
    /**
     * @param DescribeActionConnectorRequest $args
     * @return DescribeActionConnectorResponse
     */
    public function describeActionConnector(DescribeActionConnectorRequest $args)
    {
        $result = parent::describeActionConnector($args->toArray());
        return new DescribeActionConnectorResponse($result->toArray());
    }
}
