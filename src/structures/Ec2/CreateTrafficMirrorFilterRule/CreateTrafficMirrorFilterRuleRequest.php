<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTrafficMirrorFilterRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrafficMirrorFilterId
 * @property 'ingress'|'egress' $TrafficDirection
 * @property int $RuleNumber
 * @property 'accept'|'reject' $RuleAction
 * @property Shapes\TrafficMirrorPortRangeRequest|null $DestinationPortRange
 * @property Shapes\TrafficMirrorPortRangeRequest|null $SourcePortRange
 * @property int|null $Protocol
 * @property string $DestinationCidrBlock
 * @property string $SourceCidrBlock
 * @property string|null $Description
 * @property bool|null $DryRun
 * @property string|null $ClientToken
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 */
class CreateTrafficMirrorFilterRuleRequest extends Request
{
    /**
     * @param array{
     *     TrafficMirrorFilterId: string,
     *     TrafficDirection: 'ingress'|'egress',
     *     RuleNumber: int,
     *     RuleAction: 'accept'|'reject',
     *     DestinationPortRange?: Shapes\TrafficMirrorPortRangeRequest|null,
     *     SourcePortRange?: Shapes\TrafficMirrorPortRangeRequest|null,
     *     Protocol?: int|null,
     *     DestinationCidrBlock: string,
     *     SourceCidrBlock: string,
     *     Description?: string|null,
     *     DryRun?: bool|null,
     *     ClientToken?: string|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
