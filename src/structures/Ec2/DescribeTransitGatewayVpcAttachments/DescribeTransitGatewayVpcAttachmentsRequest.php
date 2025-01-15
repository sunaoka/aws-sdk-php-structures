<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGatewayVpcAttachments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $TransitGatewayAttachmentIds
 * @property list<Shapes\Filter>|null $Filters
 * @property int<5, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property bool|null $DryRun
 */
class DescribeTransitGatewayVpcAttachmentsRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayAttachmentIds?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int<5, 1000>|null,
     *     NextToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
