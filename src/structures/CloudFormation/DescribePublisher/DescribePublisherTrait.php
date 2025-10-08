<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribePublisher;

trait DescribePublisherTrait
{
    /**
     * @param DescribePublisherRequest $args
     * @return DescribePublisherResponse
     */
    public function describePublisher(DescribePublisherRequest $args)
    {
        $result = parent::describePublisher($args->toArray());
        return new DescribePublisherResponse($result->toArray());
    }
}
