<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\ListNotifyCountries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IsoCountryCode
 * @property string $CountryName
 * @property list<'SMS'|'VOICE'|'MMS'|'RCS'> $SupportedChannels
 * @property list<'CODE_VERIFICATION'> $SupportedUseCases
 * @property list<'BASIC'|'ADVANCED'> $SupportedTiers
 * @property bool $CustomerOwnedIdentityRequired
 */
class NotifyCountryInformation extends Shape
{
    /**
     * @param array{
     *     IsoCountryCode: string,
     *     CountryName: string,
     *     SupportedChannels: list<'SMS'|'VOICE'|'MMS'|'RCS'>,
     *     SupportedUseCases: list<'CODE_VERIFICATION'>,
     *     SupportedTiers: list<'BASIC'|'ADVANCED'>,
     *     CustomerOwnedIdentityRequired: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
