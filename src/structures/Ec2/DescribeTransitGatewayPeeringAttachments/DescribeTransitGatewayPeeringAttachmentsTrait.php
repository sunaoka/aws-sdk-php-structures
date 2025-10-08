<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGatewayPeeringAttachments;

trait DescribeTransitGatewayPeeringAttachmentsTrait
{
    /**
     * @param DescribeTransitGatewayPeeringAttachmentsRequest $args
     * @return DescribeTransitGatewayPeeringAttachmentsResponse
     */
    public function describeTransitGatewayPeeringAttachments(DescribeTransitGatewayPeeringAttachmentsRequest $args)
    {
        $result = parent::describeTransitGatewayPeeringAttachments($args->toArray());
        return new DescribeTransitGatewayPeeringAttachmentsResponse($result->toArray());
    }
}
