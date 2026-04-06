<?php

namespace Sunaoka\Aws\Structures\XRay\ListRetrievedTraces;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'SCHEDULED'|'RUNNING'|'COMPLETE'|'FAILED'|'CANCELLED'|'TIMEOUT'|null $RetrievalStatus
 * @property 'XRAY'|'OTEL'|null $TraceFormat
 * @property list<Shapes\RetrievedTrace>|null $Traces
 * @property string|null $NextToken
 */
class ListRetrievedTracesResponse extends Response
{
}
