<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeMultiplex;

trait DescribeMultiplexTrait
{
    /**
     * @param DescribeMultiplexRequest $args
     * @return DescribeMultiplexResponse
     */
    public function describeMultiplex(DescribeMultiplexRequest $args)
    {
        $result = parent::describeMultiplex($args->toArray());
        return new DescribeMultiplexResponse($result->toArray());
    }
}
