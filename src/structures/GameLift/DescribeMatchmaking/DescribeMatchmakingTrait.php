<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeMatchmaking;

trait DescribeMatchmakingTrait
{
    /**
     * @param DescribeMatchmakingRequest $args
     * @return DescribeMatchmakingResponse
     */
    public function describeMatchmaking(DescribeMatchmakingRequest $args)
    {
        $result = parent::describeMatchmaking($args->toArray());
        return new DescribeMatchmakingResponse($result->toArray());
    }
}
