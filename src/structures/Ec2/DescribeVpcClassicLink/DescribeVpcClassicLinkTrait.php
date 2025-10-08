<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcClassicLink;

trait DescribeVpcClassicLinkTrait
{
    /**
     * @param DescribeVpcClassicLinkRequest $args
     * @return DescribeVpcClassicLinkResponse
     */
    public function describeVpcClassicLink(DescribeVpcClassicLinkRequest $args)
    {
        $result = parent::describeVpcClassicLink($args->toArray());
        return new DescribeVpcClassicLinkResponse($result->toArray());
    }
}
