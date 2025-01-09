<?php

namespace Sunaoka\Aws\Structures\Macie2\GetSensitiveDataOccurrencesAvailability;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'AVAILABLE'|'UNAVAILABLE' $code
 * @property list<'OBJECT_EXCEEDS_SIZE_QUOTA'|'UNSUPPORTED_OBJECT_TYPE'|'UNSUPPORTED_FINDING_TYPE'|'INVALID_CLASSIFICATION_RESULT'|'OBJECT_UNAVAILABLE'|'ACCOUNT_NOT_IN_ORGANIZATION'|'MISSING_GET_MEMBER_PERMISSION'|'ROLE_TOO_PERMISSIVE'|'MEMBER_ROLE_TOO_PERMISSIVE'|'INVALID_RESULT_SIGNATURE'|'RESULT_NOT_SIGNED'> $reasons
 */
class GetSensitiveDataOccurrencesAvailabilityResponse extends Response
{
}
