<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListEventBridgeRuleTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $Description
 * @property int $EventTargetCount
 * @property 'MEDIALIVE_MULTIPLEX_ALERT'|'MEDIALIVE_MULTIPLEX_STATE_CHANGE'|'MEDIALIVE_CHANNEL_ALERT'|'MEDIALIVE_CHANNEL_INPUT_CHANGE'|'MEDIALIVE_CHANNEL_STATE_CHANGE'|'MEDIAPACKAGE_INPUT_NOTIFICATION'|'MEDIAPACKAGE_KEY_PROVIDER_NOTIFICATION'|'MEDIAPACKAGE_HARVEST_JOB_NOTIFICATION'|'SIGNAL_MAP_ACTIVE_ALARM'|'MEDIACONNECT_ALERT'|'MEDIACONNECT_SOURCE_HEALTH'|'MEDIACONNECT_OUTPUT_HEALTH'|'MEDIACONNECT_FLOW_STATUS_CHANGE' $EventType
 * @property string $GroupId
 * @property string $Id
 * @property \Aws\Api\DateTimeResult $ModifiedAt
 * @property string $Name
 * @property array<string, string> $Tags
 */
class EventBridgeRuleTemplateSummary extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     Description?: string,
     *     EventTargetCount: int,
     *     EventType: 'MEDIALIVE_MULTIPLEX_ALERT'|'MEDIALIVE_MULTIPLEX_STATE_CHANGE'|'MEDIALIVE_CHANNEL_ALERT'|'MEDIALIVE_CHANNEL_INPUT_CHANGE'|'MEDIALIVE_CHANNEL_STATE_CHANGE'|'MEDIAPACKAGE_INPUT_NOTIFICATION'|'MEDIAPACKAGE_KEY_PROVIDER_NOTIFICATION'|'MEDIAPACKAGE_HARVEST_JOB_NOTIFICATION'|'SIGNAL_MAP_ACTIVE_ALARM'|'MEDIACONNECT_ALERT'|'MEDIACONNECT_SOURCE_HEALTH'|'MEDIACONNECT_OUTPUT_HEALTH'|'MEDIACONNECT_FLOW_STATUS_CHANGE',
     *     GroupId: string,
     *     Id: string,
     *     ModifiedAt?: \Aws\Api\DateTimeResult,
     *     Name: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
