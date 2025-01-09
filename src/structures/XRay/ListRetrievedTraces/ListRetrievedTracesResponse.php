<?php

namespace Sunaoka\Aws\Structures\XRay\ListRetrievedTraces;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'SCHEDULED'|'RUNNING'|'COMPLETE'|'FAILED'|'CANCELLED'|'TIMEOUT' $RetrievalStatus
 * @property 'XRAY'|'OTEL' $TraceFormat
 * @property list<Shapes\RetrievedTrace> $Traces
 * @property string $NextToken
 */
class ListRetrievedTracesResponse extends Response
{
}
