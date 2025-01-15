<?php

namespace Sunaoka\Aws\Structures\XRay\GetRetrievedTracesGraph;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'SCHEDULED'|'RUNNING'|'COMPLETE'|'FAILED'|'CANCELLED'|'TIMEOUT'|null $RetrievalStatus
 * @property list<Shapes\RetrievedService>|null $Services
 * @property string|null $NextToken
 */
class GetRetrievedTracesGraphResponse extends Response
{
}
