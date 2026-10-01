<?php

namespace Sunaoka\Aws\Structures\Account\GetContactInformation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ContactInformation|null $ContactInformation
 * @property 'PENDING'|'VERIFIED'|'UNVERIFIED'|'NOT_SUPPORTED'|null $VerificationStatus
 */
class GetContactInformationResponse extends Response
{
}
