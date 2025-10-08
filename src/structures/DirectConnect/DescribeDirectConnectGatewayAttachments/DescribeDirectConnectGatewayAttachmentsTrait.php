<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeDirectConnectGatewayAttachments;

trait DescribeDirectConnectGatewayAttachmentsTrait
{
    /**
     * @param DescribeDirectConnectGatewayAttachmentsRequest $args
     * @return DescribeDirectConnectGatewayAttachmentsResponse
     */
    public function describeDirectConnectGatewayAttachments(DescribeDirectConnectGatewayAttachmentsRequest $args)
    {
        $result = parent::describeDirectConnectGatewayAttachments($args->toArray());
        return new DescribeDirectConnectGatewayAttachmentsResponse($result->toArray());
    }
}
