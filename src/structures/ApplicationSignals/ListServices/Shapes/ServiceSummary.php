<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $KeyAttributes
 * @property list<array<string, string>> $AttributeMaps
 * @property list<MetricReference> $MetricReferences
 */
class ServiceSummary extends Shape
{
    /**
     * @param array{
     *     KeyAttributes: array<string, string>,
     *     AttributeMaps?: list<array<string, string>>,
     *     MetricReferences: list<MetricReference>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
