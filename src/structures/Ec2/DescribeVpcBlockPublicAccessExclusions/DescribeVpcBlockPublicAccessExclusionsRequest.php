<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcBlockPublicAccessExclusions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<Shapes\Filter> $Filters
 * @property list<string> $ExclusionIds
 * @property string $NextToken
 * @property int<5, 1000> $MaxResults
 */
class DescribeVpcBlockPublicAccessExclusionsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     Filters?: list<Shapes\Filter>,
     *     ExclusionIds?: list<string>,
     *     NextToken?: string,
     *     MaxResults?: int<5, 1000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
