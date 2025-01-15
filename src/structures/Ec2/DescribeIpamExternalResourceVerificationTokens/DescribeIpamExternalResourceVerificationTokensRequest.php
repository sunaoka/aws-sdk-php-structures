<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIpamExternalResourceVerificationTokens;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<Shapes\Filter>|null $Filters
 * @property string|null $NextToken
 * @property int<5, 1000>|null $MaxResults
 * @property list<string>|null $IpamExternalResourceVerificationTokenIds
 */
class DescribeIpamExternalResourceVerificationTokensRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<5, 1000>|null,
     *     IpamExternalResourceVerificationTokenIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
