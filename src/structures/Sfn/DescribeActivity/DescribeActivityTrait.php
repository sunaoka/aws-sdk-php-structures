<?php

namespace Sunaoka\Aws\Structures\Sfn\DescribeActivity;

trait DescribeActivityTrait
{
    /**
     * @param DescribeActivityRequest $args
     * @return DescribeActivityResponse
     */
    public function describeActivity(DescribeActivityRequest $args)
    {
        $result = parent::describeActivity($args->toArray());
        return new DescribeActivityResponse($result->toArray());
    }
}
