<?php

namespace Sunaoka\Aws\Structures\Connect\ListReplicationFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Region
 * @property string $Status
 */
class ResourceReplicationStatus extends Shape
{
    /**
     * @param array{
     *     Region: string,
     *     Status: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
