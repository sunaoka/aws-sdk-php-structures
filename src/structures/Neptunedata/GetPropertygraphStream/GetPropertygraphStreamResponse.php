<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetPropertygraphStream;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<string, string> $lastEventId
 * @property int $lastTrxTimestampInMillis
 * @property string $format
 * @property list<Shapes\PropertygraphRecord> $records
 * @property int $totalRecords
 */
class GetPropertygraphStreamResponse extends Response
{
}
