<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListServiceDependents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OperationName
 * @property array<string, string> $DependentKeyAttributes
 * @property string|null $DependentOperationName
 * @property list<MetricReference> $MetricReferences
 */
class ServiceDependent extends Shape
{
    /**
     * @param array{
     *     OperationName?: string|null,
     *     DependentKeyAttributes: array<string, string>,
     *     DependentOperationName?: string|null,
     *     MetricReferences: list<MetricReference>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
