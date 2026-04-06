<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CarrierLookup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $E164PhoneNumber
 * @property string|null $DialingCountryCode
 * @property string|null $IsoCountryCode
 * @property string|null $Country
 * @property string|null $MCC
 * @property string|null $MNC
 * @property string|null $Carrier
 * @property 'MOBILE'|'LANDLINE'|'OTHER'|'INVALID' $PhoneNumberType
 */
class CarrierLookupResponse extends Response
{
}
