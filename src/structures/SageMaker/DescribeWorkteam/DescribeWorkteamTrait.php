<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeWorkteam;

trait DescribeWorkteamTrait
{
    /**
     * @param DescribeWorkteamRequest $args
     * @return DescribeWorkteamResponse
     */
    public function describeWorkteam(DescribeWorkteamRequest $args)
    {
        $result = parent::describeWorkteam($args->toArray());
        return new DescribeWorkteamResponse($result->toArray());
    }
}
