<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\BatchGetServiceLevelObjectiveBudgetReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $DependencyKeyAttributes
 * @property string $DependencyOperationName
 */
class DependencyConfig extends Shape
{
    /**
     * @param array{
     *     DependencyKeyAttributes: array<string, string>,
     *     DependencyOperationName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
