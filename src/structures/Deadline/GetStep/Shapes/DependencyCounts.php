<?php

namespace Sunaoka\Aws\Structures\Deadline\GetStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $dependenciesResolved
 * @property int $dependenciesUnresolved
 * @property int $consumersResolved
 * @property int $consumersUnresolved
 */
class DependencyCounts extends Shape
{
    /**
     * @param array{
     *     dependenciesResolved: int,
     *     dependenciesUnresolved: int,
     *     consumersResolved: int,
     *     consumersUnresolved: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
