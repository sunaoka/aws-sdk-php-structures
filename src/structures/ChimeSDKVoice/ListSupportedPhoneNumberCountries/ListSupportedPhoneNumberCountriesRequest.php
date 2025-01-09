<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\ListSupportedPhoneNumberCountries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'VoiceConnector'|'SipMediaApplicationDialIn' $ProductType
 */
class ListSupportedPhoneNumberCountriesRequest extends Request
{
    /**
     * @param array{ProductType: 'VoiceConnector'|'SipMediaApplicationDialIn'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
