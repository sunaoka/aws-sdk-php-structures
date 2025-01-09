<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTrafficMirrorTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $TrafficMirrorTargetIds
 * @property bool $DryRun
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeTrafficMirrorTargetsRequest extends Request
{
    /**
     * @param array{
     *     TrafficMirrorTargetIds?: list<string>,
     *     DryRun?: bool,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
