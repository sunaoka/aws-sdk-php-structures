<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeSubscribedWorkteam;

trait DescribeSubscribedWorkteamTrait
{
    /**
     * @param DescribeSubscribedWorkteamRequest $args
     * @return DescribeSubscribedWorkteamResponse
     */
    public function describeSubscribedWorkteam(DescribeSubscribedWorkteamRequest $args)
    {
        $result = parent::describeSubscribedWorkteam($args->toArray());
        return new DescribeSubscribedWorkteamResponse($result->toArray());
    }
}
