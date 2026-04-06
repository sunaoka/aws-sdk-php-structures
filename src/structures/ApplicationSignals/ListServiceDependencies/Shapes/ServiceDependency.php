<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListServiceDependencies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OperationName
 * @property array<string, string> $DependencyKeyAttributes
 * @property string $DependencyOperationName
 * @property list<MetricReference> $MetricReferences
 */
class ServiceDependency extends Shape
{
    /**
     * @param array{
     *     OperationName: string,
     *     DependencyKeyAttributes: array<string, string>,
     *     DependencyOperationName: string,
     *     MetricReferences: list<MetricReference>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
