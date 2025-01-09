<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetSparqlStream;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<string, string> $lastEventId
 * @property int $lastTrxTimestampInMillis
 * @property string $format
 * @property list<Shapes\SparqlRecord> $records
 * @property int $totalRecords
 */
class GetSparqlStreamResponse extends Response
{
}
