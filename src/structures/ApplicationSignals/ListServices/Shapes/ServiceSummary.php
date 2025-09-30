<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $KeyAttributes
 * @property list<array<string, string>>|null $AttributeMaps
 * @property list<MetricReference> $MetricReferences
 * @property list<ServiceGroup>|null $ServiceGroups
 */
class ServiceSummary extends Shape
{
    /**
     * @param array{
     *     KeyAttributes: array<string, string>,
     *     AttributeMaps?: list<array<string, string>>|null,
     *     MetricReferences: list<MetricReference>,
     *     ServiceGroups?: list<ServiceGroup>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
