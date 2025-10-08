<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeClientBranding;

trait DescribeClientBrandingTrait
{
    /**
     * @param DescribeClientBrandingRequest $args
     * @return DescribeClientBrandingResponse
     */
    public function describeClientBranding(DescribeClientBrandingRequest $args)
    {
        $result = parent::describeClientBranding($args->toArray());
        return new DescribeClientBrandingResponse($result->toArray());
    }
}
