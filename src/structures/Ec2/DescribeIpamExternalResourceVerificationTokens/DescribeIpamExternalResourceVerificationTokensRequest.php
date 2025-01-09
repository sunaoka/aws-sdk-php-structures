<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIpamExternalResourceVerificationTokens;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<Shapes\Filter> $Filters
 * @property string $NextToken
 * @property int $MaxResults
 * @property list<string> $IpamExternalResourceVerificationTokenIds
 */
class DescribeIpamExternalResourceVerificationTokensRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     Filters?: list<Shapes\Filter>,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     IpamExternalResourceVerificationTokenIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
