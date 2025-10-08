<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHub;

trait DescribeHubTrait
{
    /**
     * @param DescribeHubRequest $args
     * @return DescribeHubResponse
     */
    public function describeHub(DescribeHubRequest $args)
    {
        $result = parent::describeHub($args->toArray());
        return new DescribeHubResponse($result->toArray());
    }
}
