<?php

namespace Sunaoka\Aws\Structures\ARCZonalShift\ListManagedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property list<string> $availabilityZones
 * @property string|null $name
 */
class ManagedResourceSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     availabilityZones: list<string>,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
