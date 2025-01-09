<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTrafficMirrorFilterRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrafficMirrorFilterRuleId
 * @property 'ingress'|'egress' $TrafficDirection
 * @property int $RuleNumber
 * @property 'accept'|'reject' $RuleAction
 * @property Shapes\TrafficMirrorPortRangeRequest $DestinationPortRange
 * @property Shapes\TrafficMirrorPortRangeRequest $SourcePortRange
 * @property int $Protocol
 * @property string $DestinationCidrBlock
 * @property string $SourceCidrBlock
 * @property string $Description
 * @property list<'destination-port-range'|'source-port-range'|'protocol'|'description'> $RemoveFields
 * @property bool $DryRun
 */
class ModifyTrafficMirrorFilterRuleRequest extends Request
{
    /**
     * @param array{
     *     TrafficMirrorFilterRuleId: string,
     *     TrafficDirection?: 'ingress'|'egress',
     *     RuleNumber?: int,
     *     RuleAction?: 'accept'|'reject',
     *     DestinationPortRange?: Shapes\TrafficMirrorPortRangeRequest,
     *     SourcePortRange?: Shapes\TrafficMirrorPortRangeRequest,
     *     Protocol?: int,
     *     DestinationCidrBlock?: string,
     *     SourceCidrBlock?: string,
     *     Description?: string,
     *     RemoveFields?: list<'destination-port-range'|'source-port-range'|'protocol'|'description'>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
