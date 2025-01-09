<?php

namespace Sunaoka\Aws\Structures\XRay\GetRetrievedTracesGraph;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'SCHEDULED'|'RUNNING'|'COMPLETE'|'FAILED'|'CANCELLED'|'TIMEOUT' $RetrievalStatus
 * @property list<Shapes\RetrievedService> $Services
 * @property string $NextToken
 */
class GetRetrievedTracesGraphResponse extends Response
{
}
