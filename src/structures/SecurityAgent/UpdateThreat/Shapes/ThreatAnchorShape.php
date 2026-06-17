<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateThreat\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $kind
 * @property string|null $id
 * @property string|null $packageId
 */
class ThreatAnchorShape extends Shape
{
    /**
     * @param array{
     *     kind?: string|null,
     *     id?: string|null,
     *     packageId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
