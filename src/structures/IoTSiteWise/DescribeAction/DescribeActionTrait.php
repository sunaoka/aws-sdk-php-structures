<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAction;

trait DescribeActionTrait
{
    /**
     * @param DescribeActionRequest $args
     * @return DescribeActionResponse
     */
    public function describeAction(DescribeActionRequest $args)
    {
        $result = parent::describeAction($args->toArray());
        return new DescribeActionResponse($result->toArray());
    }
}
