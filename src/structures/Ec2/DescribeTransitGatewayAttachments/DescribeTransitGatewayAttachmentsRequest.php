<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGatewayAttachments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $TransitGatewayAttachmentIds
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 * @property bool $DryRun
 */
class DescribeTransitGatewayAttachmentsRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayAttachmentIds?: list<string>,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
