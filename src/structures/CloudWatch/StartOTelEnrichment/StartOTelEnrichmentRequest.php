<?php

namespace Sunaoka\Aws\Structures\CloudWatch\StartOTelEnrichment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\OTelEnrichmentMetricSelector>|null $IncludeFilters
 * @property list<Shapes\OTelEnrichmentMetricSelector>|null $ExcludeFilters
 * @property bool|null $EnableTagEnrichment
 */
class StartOTelEnrichmentRequest extends Request
{
    /**
     * @param array{
     *     IncludeFilters?: list<Shapes\OTelEnrichmentMetricSelector>|null,
     *     ExcludeFilters?: list<Shapes\OTelEnrichmentMetricSelector>|null,
     *     EnableTagEnrichment?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
