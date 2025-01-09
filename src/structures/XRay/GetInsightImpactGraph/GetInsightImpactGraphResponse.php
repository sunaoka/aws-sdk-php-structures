<?php

namespace Sunaoka\Aws\Structures\XRay\GetInsightImpactGraph;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $InsightId
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property \Aws\Api\DateTimeResult $ServiceGraphStartTime
 * @property \Aws\Api\DateTimeResult $ServiceGraphEndTime
 * @property list<Shapes\InsightImpactGraphService> $Services
 * @property string $NextToken
 */
class GetInsightImpactGraphResponse extends Response
{
}
