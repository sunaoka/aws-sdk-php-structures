<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeScheduledActions;

trait DescribeScheduledActionsTrait
{
    /**
     * @param DescribeScheduledActionsRequest $args
     * @return DescribeScheduledActionsResponse
     */
    public function describeScheduledActions(DescribeScheduledActionsRequest $args)
    {
        $result = parent::describeScheduledActions($args->toArray());
        return new DescribeScheduledActionsResponse($result->toArray());
    }
}
