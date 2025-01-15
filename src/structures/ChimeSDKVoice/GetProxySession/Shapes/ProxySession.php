<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetProxySession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VoiceConnectorId
 * @property string|null $ProxySessionId
 * @property string|null $Name
 * @property 'Open'|'InProgress'|'Closed'|null $Status
 * @property int<1, max>|null $ExpiryMinutes
 * @property list<'Voice'|'SMS'>|null $Capabilities
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $UpdatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $EndedTimestamp
 * @property list<Participant>|null $Participants
 * @property 'PreferSticky'|'AvoidSticky'|null $NumberSelectionBehavior
 * @property 'Country'|'AreaCode'|null $GeoMatchLevel
 * @property GeoMatchParams|null $GeoMatchParams
 */
class ProxySession extends Shape
{
    /**
     * @param array{
     *     VoiceConnectorId?: string|null,
     *     ProxySessionId?: string|null,
     *     Name?: string|null,
     *     Status?: 'Open'|'InProgress'|'Closed'|null,
     *     ExpiryMinutes?: int<1, max>|null,
     *     Capabilities?: list<'Voice'|'SMS'>|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     EndedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Participants?: list<Participant>|null,
     *     NumberSelectionBehavior?: 'PreferSticky'|'AvoidSticky'|null,
     *     GeoMatchLevel?: 'Country'|'AreaCode'|null,
     *     GeoMatchParams?: GeoMatchParams|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
