<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTopology;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $NextToken
 * @property int $MaxResults
 * @property list<string> $InstanceIds
 * @property list<string> $GroupNames
 * @property list<Shapes\Filter> $Filters
 */
class DescribeInstanceTopologyRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     InstanceIds?: list<string>,
     *     GroupNames?: list<string>,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
