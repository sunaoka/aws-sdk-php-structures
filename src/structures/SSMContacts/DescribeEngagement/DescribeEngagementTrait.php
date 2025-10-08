<?php

namespace Sunaoka\Aws\Structures\SSMContacts\DescribeEngagement;

trait DescribeEngagementTrait
{
    /**
     * @param DescribeEngagementRequest $args
     * @return DescribeEngagementResponse
     */
    public function describeEngagement(DescribeEngagementRequest $args)
    {
        $result = parent::describeEngagement($args->toArray());
        return new DescribeEngagementResponse($result->toArray());
    }
}
