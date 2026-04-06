<?php

namespace Sunaoka\Aws\Structures\Evs\ListEnvironmentVlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $associationId
 * @property string|null $allocationId
 * @property string|null $ipAddress
 */
class EipAssociation extends Shape
{
    /**
     * @param array{
     *     associationId?: string|null,
     *     allocationId?: string|null,
     *     ipAddress?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
