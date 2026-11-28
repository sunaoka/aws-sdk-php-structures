<?php

namespace Sunaoka\Aws\Structures\CloudWatch\UpdateOTelEnrichment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\OTelEnrichmentMetricSelector>|null $IncludeFilters
 * @property list<Shapes\OTelEnrichmentMetricSelector>|null $ExcludeFilters
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property bool|null $EnableTagEnrichment
 */
class UpdateOTelEnrichmentResponse extends Response
{
}
