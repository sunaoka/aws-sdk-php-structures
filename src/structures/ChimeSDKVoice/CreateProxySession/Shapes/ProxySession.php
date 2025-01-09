<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\CreateProxySession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VoiceConnectorId
 * @property string $ProxySessionId
 * @property string $Name
 * @property 'Open'|'InProgress'|'Closed' $Status
 * @property int $ExpiryMinutes
 * @property list<'Voice'|'SMS'> $Capabilities
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $UpdatedTimestamp
 * @property \Aws\Api\DateTimeResult $EndedTimestamp
 * @property list<Participant> $Participants
 * @property 'PreferSticky'|'AvoidSticky' $NumberSelectionBehavior
 * @property 'Country'|'AreaCode' $GeoMatchLevel
 * @property GeoMatchParams $GeoMatchParams
 */
class ProxySession extends Shape
{
    /**
     * @param array{
     *     VoiceConnectorId?: string,
     *     ProxySessionId?: string,
     *     Name?: string,
     *     Status?: 'Open'|'InProgress'|'Closed',
     *     ExpiryMinutes?: int,
     *     Capabilities?: list<'Voice'|'SMS'>,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult,
     *     EndedTimestamp?: \Aws\Api\DateTimeResult,
     *     Participants?: list<Participant>,
     *     NumberSelectionBehavior?: 'PreferSticky'|'AvoidSticky',
     *     GeoMatchLevel?: 'Country'|'AreaCode',
     *     GeoMatchParams?: GeoMatchParams
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
