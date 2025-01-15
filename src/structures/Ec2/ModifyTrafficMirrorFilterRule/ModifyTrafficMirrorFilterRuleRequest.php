<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTrafficMirrorFilterRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrafficMirrorFilterRuleId
 * @property 'ingress'|'egress'|null $TrafficDirection
 * @property int|null $RuleNumber
 * @property 'accept'|'reject'|null $RuleAction
 * @property Shapes\TrafficMirrorPortRangeRequest|null $DestinationPortRange
 * @property Shapes\TrafficMirrorPortRangeRequest|null $SourcePortRange
 * @property int|null $Protocol
 * @property string|null $DestinationCidrBlock
 * @property string|null $SourceCidrBlock
 * @property string|null $Description
 * @property list<'destination-port-range'|'source-port-range'|'protocol'|'description'>|null $RemoveFields
 * @property bool|null $DryRun
 */
class ModifyTrafficMirrorFilterRuleRequest extends Request
{
    /**
     * @param array{
     *     TrafficMirrorFilterRuleId: string,
     *     TrafficDirection?: 'ingress'|'egress'|null,
     *     RuleNumber?: int|null,
     *     RuleAction?: 'accept'|'reject'|null,
     *     DestinationPortRange?: Shapes\TrafficMirrorPortRangeRequest|null,
     *     SourcePortRange?: Shapes\TrafficMirrorPortRangeRequest|null,
     *     Protocol?: int|null,
     *     DestinationCidrBlock?: string|null,
     *     SourceCidrBlock?: string|null,
     *     Description?: string|null,
     *     RemoveFields?: list<'destination-port-range'|'source-port-range'|'protocol'|'description'>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
