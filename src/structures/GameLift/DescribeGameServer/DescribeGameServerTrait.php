<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeGameServer;

trait DescribeGameServerTrait
{
    /**
     * @param DescribeGameServerRequest $args
     * @return DescribeGameServerResponse
     */
    public function describeGameServer(DescribeGameServerRequest $args)
    {
        $result = parent::describeGameServer($args->toArray());
        return new DescribeGameServerResponse($result->toArray());
    }
}
