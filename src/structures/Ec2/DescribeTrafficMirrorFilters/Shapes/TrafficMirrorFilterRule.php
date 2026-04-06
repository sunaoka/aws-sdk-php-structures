<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTrafficMirrorFilters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TrafficMirrorFilterRuleId
 * @property string|null $TrafficMirrorFilterId
 * @property 'ingress'|'egress'|null $TrafficDirection
 * @property int|null $RuleNumber
 * @property 'accept'|'reject'|null $RuleAction
 * @property int|null $Protocol
 * @property TrafficMirrorPortRange|null $DestinationPortRange
 * @property TrafficMirrorPortRange|null $SourcePortRange
 * @property string|null $DestinationCidrBlock
 * @property string|null $SourceCidrBlock
 * @property string|null $Description
 * @property list<Tag>|null $Tags
 */
class TrafficMirrorFilterRule extends Shape
{
    /**
     * @param array{
     *     TrafficMirrorFilterRuleId?: string|null,
     *     TrafficMirrorFilterId?: string|null,
     *     TrafficDirection?: 'ingress'|'egress'|null,
     *     RuleNumber?: int|null,
     *     RuleAction?: 'accept'|'reject'|null,
     *     Protocol?: int|null,
     *     DestinationPortRange?: TrafficMirrorPortRange|null,
     *     SourcePortRange?: TrafficMirrorPortRange|null,
     *     DestinationCidrBlock?: string|null,
     *     SourceCidrBlock?: string|null,
     *     Description?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
