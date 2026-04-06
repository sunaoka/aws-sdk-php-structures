<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\GetService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $KeyAttributes
 * @property list<array<string, string>>|null $AttributeMaps
 * @property list<ServiceGroup>|null $ServiceGroups
 * @property list<MetricReference> $MetricReferences
 * @property list<array<string, string>>|null $LogGroupReferences
 */
class Service extends Shape
{
    /**
     * @param array{
     *     KeyAttributes: array<string, string>,
     *     AttributeMaps?: list<array<string, string>>|null,
     *     ServiceGroups?: list<ServiceGroup>|null,
     *     MetricReferences: list<MetricReference>,
     *     LogGroupReferences?: list<array<string, string>>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
