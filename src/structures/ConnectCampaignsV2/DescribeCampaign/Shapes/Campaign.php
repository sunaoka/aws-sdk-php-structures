<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DescribeCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $name
 * @property string $connectInstanceId
 * @property ChannelSubtypeConfig $channelSubtypeConfig
 * @property Source|null $source
 * @property string|null $connectCampaignFlowArn
 * @property Schedule|null $schedule
 * @property CommunicationTimeConfig|null $communicationTimeConfig
 * @property CommunicationLimitsConfig|null $communicationLimitsOverride
 * @property array<string, string>|null $tags
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
     *     source?: Source|null,
     *     connectCampaignFlowArn?: string|null,
     *     schedule?: Schedule|null,
     *     communicationTimeConfig?: CommunicationTimeConfig|null,
     *     communicationLimitsOverride?: CommunicationLimitsConfig|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
