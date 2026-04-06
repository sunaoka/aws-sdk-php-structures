<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\CreateCampaign;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $connectInstanceId
 * @property Shapes\ChannelSubtypeConfig $channelSubtypeConfig
 * @property Shapes\Source|null $source
 * @property string|null $connectCampaignFlowArn
 * @property Shapes\Schedule|null $schedule
 * @property Shapes\CommunicationTimeConfig|null $communicationTimeConfig
 * @property Shapes\CommunicationLimitsConfig|null $communicationLimitsOverride
 * @property array<string, string>|null $tags
 */
class CreateCampaignRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     connectInstanceId: string,
     *     channelSubtypeConfig: Shapes\ChannelSubtypeConfig,
     *     source?: Shapes\Source|null,
     *     connectCampaignFlowArn?: string|null,
     *     schedule?: Shapes\Schedule|null,
     *     communicationTimeConfig?: Shapes\CommunicationTimeConfig|null,
     *     communicationLimitsOverride?: Shapes\CommunicationLimitsConfig|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
