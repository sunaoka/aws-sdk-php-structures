<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTrafficMirrorFilterRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $TrafficMirrorFilterRuleIds
 * @property string $TrafficMirrorFilterId
 * @property bool $DryRun
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeTrafficMirrorFilterRulesRequest extends Request
{
    /**
     * @param array{
     *     TrafficMirrorFilterRuleIds?: list<string>,
     *     TrafficMirrorFilterId?: string,
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
