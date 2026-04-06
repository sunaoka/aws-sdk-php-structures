<?php

namespace Sunaoka\Aws\Structures\Chime\CreateProxySession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 * @property list<string> $ParticipantPhoneNumbers
 * @property string|null $Name
 * @property int<1, max>|null $ExpiryMinutes
 * @property list<'Voice'|'SMS'> $Capabilities
 * @property 'PreferSticky'|'AvoidSticky'|null $NumberSelectionBehavior
 * @property 'Country'|'AreaCode'|null $GeoMatchLevel
 * @property Shapes\GeoMatchParams|null $GeoMatchParams
 */
class CreateProxySessionRequest extends Request
{
    /**
     * @param array{
     *     VoiceConnectorId: string,
     *     ParticipantPhoneNumbers: list<string>,
     *     Name?: string|null,
     *     ExpiryMinutes?: int<1, max>|null,
     *     Capabilities: list<'Voice'|'SMS'>,
     *     NumberSelectionBehavior?: 'PreferSticky'|'AvoidSticky'|null,
     *     GeoMatchLevel?: 'Country'|'AreaCode'|null,
     *     GeoMatchParams?: Shapes\GeoMatchParams|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
