<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcClassicLinkDnsSupport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<5, 255>|null $MaxResults
 * @property string|null $NextToken
 * @property list<string>|null $VpcIds
 */
class DescribeVpcClassicLinkDnsSupportRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<5, 255>|null,
     *     NextToken?: string|null,
     *     VpcIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
