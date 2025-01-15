<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcClassicLinkDnsSupport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $VpcIds
 * @property int<5, 255>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeVpcClassicLinkDnsSupportRequest extends Request
{
    /**
     * @param array{
     *     VpcIds?: list<string>|null,
     *     MaxResults?: int<5, 255>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
