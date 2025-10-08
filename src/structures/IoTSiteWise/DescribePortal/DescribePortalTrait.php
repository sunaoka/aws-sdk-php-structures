<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribePortal;

trait DescribePortalTrait
{
    /**
     * @param DescribePortalRequest $args
     * @return DescribePortalResponse
     */
    public function describePortal(DescribePortalRequest $args)
    {
        $result = parent::describePortal($args->toArray());
        return new DescribePortalResponse($result->toArray());
    }
}
