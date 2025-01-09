<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateEventBridgeRuleTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property list<Shapes\EventBridgeRuleTemplateTarget> $EventTargets
 * @property 'MEDIALIVE_MULTIPLEX_ALERT'|'MEDIALIVE_MULTIPLEX_STATE_CHANGE'|'MEDIALIVE_CHANNEL_ALERT'|'MEDIALIVE_CHANNEL_INPUT_CHANGE'|'MEDIALIVE_CHANNEL_STATE_CHANGE'|'MEDIAPACKAGE_INPUT_NOTIFICATION'|'MEDIAPACKAGE_KEY_PROVIDER_NOTIFICATION'|'MEDIAPACKAGE_HARVEST_JOB_NOTIFICATION'|'SIGNAL_MAP_ACTIVE_ALARM'|'MEDIACONNECT_ALERT'|'MEDIACONNECT_SOURCE_HEALTH'|'MEDIACONNECT_OUTPUT_HEALTH'|'MEDIACONNECT_FLOW_STATUS_CHANGE' $EventType
 * @property string $GroupIdentifier
 * @property string $Identifier
 * @property string $Name
 */
class UpdateEventBridgeRuleTemplateRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     EventTargets?: list<Shapes\EventBridgeRuleTemplateTarget>,
     *     EventType?: 'MEDIALIVE_MULTIPLEX_ALERT'|'MEDIALIVE_MULTIPLEX_STATE_CHANGE'|'MEDIALIVE_CHANNEL_ALERT'|'MEDIALIVE_CHANNEL_INPUT_CHANGE'|'MEDIALIVE_CHANNEL_STATE_CHANGE'|'MEDIAPACKAGE_INPUT_NOTIFICATION'|'MEDIAPACKAGE_KEY_PROVIDER_NOTIFICATION'|'MEDIAPACKAGE_HARVEST_JOB_NOTIFICATION'|'SIGNAL_MAP_ACTIVE_ALARM'|'MEDIACONNECT_ALERT'|'MEDIACONNECT_SOURCE_HEALTH'|'MEDIACONNECT_OUTPUT_HEALTH'|'MEDIACONNECT_FLOW_STATUS_CHANGE',
     *     GroupIdentifier?: string,
     *     Identifier: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
