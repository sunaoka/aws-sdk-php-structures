<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTrafficMirrorFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TrafficMirrorFilterRuleId
 * @property string $TrafficMirrorFilterId
 * @property 'ingress'|'egress' $TrafficDirection
 * @property int $RuleNumber
 * @property 'accept'|'reject' $RuleAction
 * @property int $Protocol
 * @property TrafficMirrorPortRange $DestinationPortRange
 * @property TrafficMirrorPortRange $SourcePortRange
 * @property string $DestinationCidrBlock
 * @property string $SourceCidrBlock
 * @property string $Description
 * @property list<Tag> $Tags
 */
class TrafficMirrorFilterRule extends Shape
{
    /**
     * @param array{
     *     TrafficMirrorFilterRuleId?: string,
     *     TrafficMirrorFilterId?: string,
     *     TrafficDirection?: 'ingress'|'egress',
     *     RuleNumber?: int,
     *     RuleAction?: 'accept'|'reject',
     *     Protocol?: int,
     *     DestinationPortRange?: TrafficMirrorPortRange,
     *     SourcePortRange?: TrafficMirrorPortRange,
     *     DestinationCidrBlock?: string,
     *     SourceCidrBlock?: string,
     *     Description?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
