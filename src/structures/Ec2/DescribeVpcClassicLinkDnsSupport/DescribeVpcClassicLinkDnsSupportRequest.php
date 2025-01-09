<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcClassicLinkDnsSupport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $VpcIds
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeVpcClassicLinkDnsSupportRequest extends Request
{
    /**
     * @param array{
     *     VpcIds?: list<string>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
