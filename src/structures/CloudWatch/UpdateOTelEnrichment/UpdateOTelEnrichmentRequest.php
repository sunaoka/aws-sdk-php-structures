<?php

namespace Sunaoka\Aws\Structures\CloudWatch\UpdateOTelEnrichment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\OTelEnrichmentMetricSelector>|null $IncludeFilters
 * @property list<Shapes\OTelEnrichmentMetricSelector>|null $ExcludeFilters
 */
class UpdateOTelEnrichmentRequest extends Request
{
    /**
     * @param array{
     *     IncludeFilters?: list<Shapes\OTelEnrichmentMetricSelector>|null,
     *     ExcludeFilters?: list<Shapes\OTelEnrichmentMetricSelector>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
