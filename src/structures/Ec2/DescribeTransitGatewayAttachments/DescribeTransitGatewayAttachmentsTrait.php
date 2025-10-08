<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGatewayAttachments;

trait DescribeTransitGatewayAttachmentsTrait
{
    /**
     * @param DescribeTransitGatewayAttachmentsRequest $args
     * @return DescribeTransitGatewayAttachmentsResponse
     */
    public function describeTransitGatewayAttachments(DescribeTransitGatewayAttachmentsRequest $args)
    {
        $result = parent::describeTransitGatewayAttachments($args->toArray());
        return new DescribeTransitGatewayAttachmentsResponse($result->toArray());
    }
}
