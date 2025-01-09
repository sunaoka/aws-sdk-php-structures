<?php

namespace Sunaoka\Aws\Structures\Chime\ListSupportedPhoneNumberCountries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'BusinessCalling'|'VoiceConnector'|'SipMediaApplicationDialIn' $ProductType
 */
class ListSupportedPhoneNumberCountriesRequest extends Request
{
    /**
     * @param array{ProductType: 'BusinessCalling'|'VoiceConnector'|'SipMediaApplicationDialIn'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
