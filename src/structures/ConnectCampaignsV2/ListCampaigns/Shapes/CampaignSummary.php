<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\ListCampaigns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property string $name
 * @property string $connectInstanceId
 * @property list<'TELEPHONY'|'SMS'|'EMAIL'|'WHATSAPP'> $channelSubtypes
 * @property 'MANAGED'|'JOURNEY'|null $type
 * @property Schedule|null $schedule
 * @property EntryLimitsConfig|null $entryLimitsConfig
 * @property string|null $connectCampaignFlowArn
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTime
 */
class CampaignSummary extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     arn: string,
     *     name: string,
     *     connectInstanceId: string,
     *     channelSubtypes: list<'TELEPHONY'|'SMS'|'EMAIL'|'WHATSAPP'>,
     *     type?: 'MANAGED'|'JOURNEY'|null,
     *     schedule?: Schedule|null,
     *     entryLimitsConfig?: EntryLimitsConfig|null,
     *     connectCampaignFlowArn?: string|null,
     *     lastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
