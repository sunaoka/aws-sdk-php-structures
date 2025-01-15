<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\UpdateReplicationSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AddRegionAction|null $addRegionAction
 * @property DeleteRegionAction|null $deleteRegionAction
 */
class UpdateReplicationSetAction extends Shape
{
    /**
     * @param array{
     *     addRegionAction?: AddRegionAction|null,
     *     deleteRegionAction?: DeleteRegionAction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
