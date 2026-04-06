<?php

namespace Sunaoka\Aws\Structures\Macie2\GetSensitiveDataOccurrencesAvailability;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'AVAILABLE'|'UNAVAILABLE'|null $code
 * @property list<'OBJECT_EXCEEDS_SIZE_QUOTA'|'UNSUPPORTED_OBJECT_TYPE'|'UNSUPPORTED_FINDING_TYPE'|'INVALID_CLASSIFICATION_RESULT'|'OBJECT_UNAVAILABLE'>|null $reasons
 */
class GetSensitiveDataOccurrencesAvailabilityResponse extends Response
{
}
