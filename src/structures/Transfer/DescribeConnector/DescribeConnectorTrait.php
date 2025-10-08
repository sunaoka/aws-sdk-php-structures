<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeConnector;

trait DescribeConnectorTrait
{
    /**
     * @param DescribeConnectorRequest $args
     * @return DescribeConnectorResponse
     */
    public function describeConnector(DescribeConnectorRequest $args)
    {
        $result = parent::describeConnector($args->toArray());
        return new DescribeConnectorResponse($result->toArray());
    }
}
