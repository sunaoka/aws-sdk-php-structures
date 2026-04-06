<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListServiceStates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AttributeFilter>|null $AttributeFilters
 * @property array<string, string> $Service
 * @property list<ChangeEvent> $LatestChangeEvents
 */
class ServiceState extends Shape
{
    /**
     * @param array{
     *     AttributeFilters?: list<AttributeFilter>|null,
     *     Service: array<string, string>,
     *     LatestChangeEvents: list<ChangeEvent>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
