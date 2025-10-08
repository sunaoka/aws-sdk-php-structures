<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGatewayVpcAttachments;

trait DescribeTransitGatewayVpcAttachmentsTrait
{
    /**
     * @param DescribeTransitGatewayVpcAttachmentsRequest $args
     * @return DescribeTransitGatewayVpcAttachmentsResponse
     */
    public function describeTransitGatewayVpcAttachments(DescribeTransitGatewayVpcAttachmentsRequest $args)
    {
        $result = parent::describeTransitGatewayVpcAttachments($args->toArray());
        return new DescribeTransitGatewayVpcAttachmentsResponse($result->toArray());
    }
}
