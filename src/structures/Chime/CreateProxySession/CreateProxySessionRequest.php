<?php

namespace Sunaoka\Aws\Structures\Chime\CreateProxySession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 * @property list<string> $ParticipantPhoneNumbers
 * @property string $Name
 * @property int $ExpiryMinutes
 * @property list<'Voice'|'SMS'> $Capabilities
 * @property 'PreferSticky'|'AvoidSticky' $NumberSelectionBehavior
 * @property 'Country'|'AreaCode' $GeoMatchLevel
 * @property Shapes\GeoMatchParams $GeoMatchParams
 */
class CreateProxySessionRequest extends Request
{
    /**
     * @param array{
     *     VoiceConnectorId: string,
     *     ParticipantPhoneNumbers: list<string>,
     *     Name?: string,
     *     ExpiryMinutes?: int,
     *     Capabilities: list<'Voice'|'SMS'>,
     *     NumberSelectionBehavior?: 'PreferSticky'|'AvoidSticky',
     *     GeoMatchLevel?: 'Country'|'AreaCode',
     *     GeoMatchParams?: Shapes\GeoMatchParams
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
