<?php

namespace Sunaoka\Aws\Structures\Route53Domains\CheckDomainAvailability;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'AVAILABLE'|'AVAILABLE_RESERVED'|'AVAILABLE_PREORDER'|'UNAVAILABLE'|'UNAVAILABLE_PREMIUM'|'UNAVAILABLE_RESTRICTED'|'RESERVED'|'DONT_KNOW'|'INVALID_NAME_FOR_TLD'|'PENDING'|null $Availability
 */
class CheckDomainAvailabilityResponse extends Response
{
}
