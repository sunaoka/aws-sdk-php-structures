<?php

namespace Sunaoka\Aws\Structures\Waf\GetSampledRequests;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\SampledHTTPRequest>|null $SampledRequests
 * @property int|null $PopulationSize
 * @property Shapes\TimeWindow|null $TimeWindow
 */
class GetSampledRequestsResponse extends Response
{
}
