<?php

namespace Sunaoka\Aws\Structures\Macie2\GetSensitiveDataOccurrences;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $error
 * @property array<string, list<Shapes\DetectedDataDetails>> $sensitiveDataOccurrences
 * @property 'SUCCESS'|'PROCESSING'|'ERROR' $status
 */
class GetSensitiveDataOccurrencesResponse extends Response
{
}
