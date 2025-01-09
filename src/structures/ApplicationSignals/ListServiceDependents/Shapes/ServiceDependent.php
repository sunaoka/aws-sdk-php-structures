<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListServiceDependents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OperationName
 * @property array<string, string> $DependentKeyAttributes
 * @property string $DependentOperationName
 * @property list<MetricReference> $MetricReferences
 */
class ServiceDependent extends Shape
{
    /**
     * @param array{
     *     OperationName?: string,
     *     DependentKeyAttributes: array<string, string>,
     *     DependentOperationName?: string,
     *     MetricReferences: list<MetricReference>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
