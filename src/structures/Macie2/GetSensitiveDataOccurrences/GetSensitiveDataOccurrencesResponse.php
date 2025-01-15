<?php

namespace Sunaoka\Aws\Structures\Macie2\GetSensitiveDataOccurrences;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $error
 * @property array<string, list<Shapes\DetectedDataDetails>>|null $sensitiveDataOccurrences
 * @property 'SUCCESS'|'PROCESSING'|'ERROR'|null $status
 */
class GetSensitiveDataOccurrencesResponse extends Response
{
}
