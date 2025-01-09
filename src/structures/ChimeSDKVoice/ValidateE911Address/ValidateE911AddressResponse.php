<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\ValidateE911Address;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int<0, 2> $ValidationResult
 * @property string $AddressExternalId
 * @property Shapes\Address $Address
 * @property list<Shapes\CandidateAddress> $CandidateAddressList
 */
class ValidateE911AddressResponse extends Response
{
}
