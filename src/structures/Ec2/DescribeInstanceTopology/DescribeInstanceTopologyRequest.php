<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTopology;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property list<string>|null $InstanceIds
 * @property list<string>|null $GroupNames
 * @property list<Shapes\Filter>|null $Filters
 */
class DescribeInstanceTopologyRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     InstanceIds?: list<string>|null,
     *     GroupNames?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
