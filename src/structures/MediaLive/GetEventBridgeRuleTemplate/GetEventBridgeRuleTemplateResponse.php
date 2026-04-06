<?php

namespace Sunaoka\Aws\Structures\MediaLive\GetEventBridgeRuleTemplate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $Description
 * @property list<Shapes\EventBridgeRuleTemplateTarget>|null $EventTargets
 * @property 'MEDIALIVE_MULTIPLEX_ALERT'|'MEDIALIVE_MULTIPLEX_STATE_CHANGE'|'MEDIALIVE_CHANNEL_ALERT'|'MEDIALIVE_CHANNEL_INPUT_CHANGE'|'MEDIALIVE_CHANNEL_STATE_CHANGE'|'MEDIAPACKAGE_INPUT_NOTIFICATION'|'MEDIAPACKAGE_KEY_PROVIDER_NOTIFICATION'|'MEDIAPACKAGE_HARVEST_JOB_NOTIFICATION'|'SIGNAL_MAP_ACTIVE_ALARM'|'MEDIACONNECT_ALERT'|'MEDIACONNECT_SOURCE_HEALTH'|'MEDIACONNECT_OUTPUT_HEALTH'|'MEDIACONNECT_FLOW_STATUS_CHANGE'|null $EventType
 * @property string|null $GroupId
 * @property string|null $Id
 * @property \Aws\Api\DateTimeResult|null $ModifiedAt
 * @property string|null $Name
 * @property array<string, string>|null $Tags
 */
class GetEventBridgeRuleTemplateResponse extends Response
{
}
