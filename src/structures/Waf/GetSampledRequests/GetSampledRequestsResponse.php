<?php

namespace Sunaoka\Aws\Structures\Waf\GetSampledRequests;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\SampledHTTPRequest> $SampledRequests
 * @property int $PopulationSize
 * @property Shapes\TimeWindow $TimeWindow
 */
class GetSampledRequestsResponse extends Response
{
}
