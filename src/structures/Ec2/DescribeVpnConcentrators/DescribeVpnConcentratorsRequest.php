<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpnConcentrators;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $VpnConcentratorIds
 * @property list<Shapes\Filter>|null $Filters
 * @property int<200, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property bool|null $DryRun
 */
class DescribeVpnConcentratorsRequest extends Request
{
    /**
     * @param array{
     *     VpnConcentratorIds?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int<200, 1000>|null,
     *     NextToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
