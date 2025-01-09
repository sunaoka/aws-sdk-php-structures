<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DescribeCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $name
 * @property string $connectInstanceId
 * @property ChannelSubtypeConfig $channelSubtypeConfig
 * @property Source $source
 * @property string $connectCampaignFlowArn
 * @property Schedule $schedule
 * @property CommunicationTimeConfig $communicationTimeConfig
 * @property CommunicationLimitsConfig $communicationLimitsOverride
 * @property array<string, string> $tags
 */
class Campaign extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     name: string,
     *     connectInstanceId: string,
     *     channelSubtypeConfig: ChannelSubtypeConfig,
     *     source?: Source,
     *     connectCampaignFlowArn?: string,
     *     schedule?: Schedule,
     *     communicationTimeConfig?: CommunicationTimeConfig,
     *     communicationLimitsOverride?: CommunicationLimitsConfig,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
