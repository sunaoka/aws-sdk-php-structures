<?php

namespace Sunaoka\Aws\Structures\Chime\ValidateE911Address;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $ValidationResult
 * @property string $AddressExternalId
 * @property Shapes\Address $Address
 * @property list<Shapes\CandidateAddress> $CandidateAddressList
 */
class ValidateE911AddressResponse extends Response
{
}
