<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcBlockPublicAccessExclusions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<Shapes\Filter>|null $Filters
 * @property list<string>|null $ExclusionIds
 * @property string|null $NextToken
 * @property int<5, 1000>|null $MaxResults
 */
class DescribeVpcBlockPublicAccessExclusionsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     ExclusionIds?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<5, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
