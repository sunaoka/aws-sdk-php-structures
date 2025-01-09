<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\CreateCampaign;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $connectInstanceId
 * @property Shapes\ChannelSubtypeConfig $channelSubtypeConfig
 * @property Shapes\Source $source
 * @property string $connectCampaignFlowArn
 * @property Shapes\Schedule $schedule
 * @property Shapes\CommunicationTimeConfig $communicationTimeConfig
 * @property Shapes\CommunicationLimitsConfig $communicationLimitsOverride
 * @property array<string, string> $tags
 */
class CreateCampaignRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     connectInstanceId: string,
     *     channelSubtypeConfig: Shapes\ChannelSubtypeConfig,
     *     source?: Shapes\Source,
     *     connectCampaignFlowArn?: string,
     *     schedule?: Shapes\Schedule,
     *     communicationTimeConfig?: Shapes\CommunicationTimeConfig,
     *     communicationLimitsOverride?: Shapes\CommunicationLimitsConfig,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
