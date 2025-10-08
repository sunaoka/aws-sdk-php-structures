<?php

namespace Sunaoka\Aws\Structures\Chatbot\DescribeSlackUserIdentities;

trait DescribeSlackUserIdentitiesTrait
{
    /**
     * @param DescribeSlackUserIdentitiesRequest $args
     * @return DescribeSlackUserIdentitiesResponse
     */
    public function describeSlackUserIdentities(DescribeSlackUserIdentitiesRequest $args)
    {
        $result = parent::describeSlackUserIdentities($args->toArray());
        return new DescribeSlackUserIdentitiesResponse($result->toArray());
    }
}
