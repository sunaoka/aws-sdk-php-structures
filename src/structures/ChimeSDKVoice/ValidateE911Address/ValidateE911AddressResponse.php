<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\ValidateE911Address;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int<0, 2>|null $ValidationResult
 * @property string|null $AddressExternalId
 * @property Shapes\Address|null $Address
 * @property list<Shapes\CandidateAddress>|null $CandidateAddressList
 */
class ValidateE911AddressResponse extends Response
{
}
