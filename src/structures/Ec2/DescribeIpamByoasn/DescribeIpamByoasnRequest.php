<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIpamByoasn;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeIpamByoasnRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
