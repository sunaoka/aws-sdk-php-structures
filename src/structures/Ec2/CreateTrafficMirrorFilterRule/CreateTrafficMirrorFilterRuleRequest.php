<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTrafficMirrorFilterRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrafficMirrorFilterId
 * @property 'ingress'|'egress' $TrafficDirection
 * @property int $RuleNumber
 * @property 'accept'|'reject' $RuleAction
 * @property Shapes\TrafficMirrorPortRangeRequest $DestinationPortRange
 * @property Shapes\TrafficMirrorPortRangeRequest $SourcePortRange
 * @property int $Protocol
 * @property string $DestinationCidrBlock
 * @property string $SourceCidrBlock
 * @property string $Description
 * @property bool $DryRun
 * @property string $ClientToken
 * @property list<Shapes\TagSpecification> $TagSpecifications
 */
class CreateTrafficMirrorFilterRuleRequest extends Request
{
    /**
     * @param array{
     *     TrafficMirrorFilterId: string,
     *     TrafficDirection: 'ingress'|'egress',
     *     RuleNumber: int,
     *     RuleAction: 'accept'|'reject',
     *     DestinationPortRange?: Shapes\TrafficMirrorPortRangeRequest,
     *     SourcePortRange?: Shapes\TrafficMirrorPortRangeRequest,
     *     Protocol?: int,
     *     DestinationCidrBlock: string,
     *     SourceCidrBlock: string,
     *     Description?: string,
     *     DryRun?: bool,
     *     ClientToken?: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
