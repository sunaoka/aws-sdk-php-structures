<?php

namespace Sunaoka\Aws\Structures\XRay\GetInsightImpactGraph;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $InsightId
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property \Aws\Api\DateTimeResult|null $ServiceGraphStartTime
 * @property \Aws\Api\DateTimeResult|null $ServiceGraphEndTime
 * @property list<Shapes\InsightImpactGraphService>|null $Services
 * @property string|null $NextToken
 */
class GetInsightImpactGraphResponse extends Response
{
}
