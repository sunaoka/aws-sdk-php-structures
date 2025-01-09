<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\GetService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $KeyAttributes
 * @property list<array<string, string>> $AttributeMaps
 * @property list<MetricReference> $MetricReferences
 * @property list<array<string, string>> $LogGroupReferences
 */
class Service extends Shape
{
    /**
     * @param array{
     *     KeyAttributes: array<string, string>,
     *     AttributeMaps?: list<array<string, string>>,
     *     MetricReferences: list<MetricReference>,
     *     LogGroupReferences?: list<array<string, string>>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
