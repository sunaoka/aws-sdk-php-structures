<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetOTelEnrichment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Namespace
 * @property list<string>|null $MetricNames
 */
class OTelEnrichmentMetricSelector extends Shape
{
    /**
     * @param array{
     *     Namespace: string,
     *     MetricNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
