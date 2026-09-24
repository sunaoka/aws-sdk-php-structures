<?php

namespace Sunaoka\Aws\Structures\CloudWatch\StartOTelEnrichment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\OTelEnrichmentMetricSelector>|null $IncludeFilters
 * @property list<Shapes\OTelEnrichmentMetricSelector>|null $ExcludeFilters
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class StartOTelEnrichmentResponse extends Response
{
}
