<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\UpdateVoiceConnectorGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorGroupId
 * @property string $Name
 * @property list<Shapes\VoiceConnectorItem> $VoiceConnectorItems
 * @property 'PriorityWeightedDistribution'|'LoadBalancedDistribution'|null $CallDistributionType
 */
class UpdateVoiceConnectorGroupRequest extends Request
{
    /**
     * @param array{
     *     VoiceConnectorGroupId: string,
     *     Name: string,
     *     VoiceConnectorItems: list<Shapes\VoiceConnectorItem>,
     *     CallDistributionType?: 'PriorityWeightedDistribution'|'LoadBalancedDistribution'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
