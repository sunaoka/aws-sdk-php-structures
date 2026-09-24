<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetOTelEnrichment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Running'|'Stopped' $Status
 * @property list<Shapes\OTelEnrichmentMetricSelector>|null $IncludeFilters
 * @property list<Shapes\OTelEnrichmentMetricSelector>|null $ExcludeFilters
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class GetOTelEnrichmentResponse extends Response
{
}
