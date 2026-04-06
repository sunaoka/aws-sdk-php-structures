<?php

namespace Sunaoka\Aws\Structures\Deadline\ListSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $consumersResolved
 * @property int $consumersUnresolved
 * @property int $dependenciesResolved
 * @property int $dependenciesUnresolved
 */
class DependencyCounts extends Shape
{
    /**
     * @param array{
     *     consumersResolved: int,
     *     consumersUnresolved: int,
     *     dependenciesResolved: int,
     *     dependenciesUnresolved: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
