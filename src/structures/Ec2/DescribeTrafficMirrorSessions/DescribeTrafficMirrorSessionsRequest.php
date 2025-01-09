<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTrafficMirrorSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $TrafficMirrorSessionIds
 * @property bool $DryRun
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeTrafficMirrorSessionsRequest extends Request
{
    /**
     * @param array{
     *     TrafficMirrorSessionIds?: list<string>,
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
