<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGatewayNetworkFunctionAttachments;

trait DescribeTransitGatewayNetworkFunctionAttachmentsTrait
{
    /**
     * @param DescribeTransitGatewayNetworkFunctionAttachmentsRequest $args
     * @return DescribeTransitGatewayNetworkFunctionAttachmentsResponse
     */
    public function describeTransitGatewayNetworkFunctionAttachments(DescribeTransitGatewayNetworkFunctionAttachmentsRequest $args)
    {
        $result = parent::describeTransitGatewayNetworkFunctionAttachments($args->toArray());
        return new DescribeTransitGatewayNetworkFunctionAttachmentsResponse($result->toArray());
    }
}
