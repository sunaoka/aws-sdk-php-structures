<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\UpdateReplicationSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AddRegionAction $addRegionAction
 * @property DeleteRegionAction $deleteRegionAction
 */
class UpdateReplicationSetAction extends Shape
{
    /**
     * @param array{
     *     addRegionAction?: AddRegionAction,
     *     deleteRegionAction?: DeleteRegionAction
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
