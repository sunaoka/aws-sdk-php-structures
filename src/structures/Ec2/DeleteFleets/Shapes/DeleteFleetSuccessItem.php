<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'submitted'|'active'|'deleted'|'failed'|'deleted_running'|'deleted_terminating'|'modifying' $CurrentFleetState
 * @property 'submitted'|'active'|'deleted'|'failed'|'deleted_running'|'deleted_terminating'|'modifying' $PreviousFleetState
 * @property string $FleetId
 */
class DeleteFleetSuccessItem extends Shape
{
    /**
     * @param array{
     *     CurrentFleetState?: 'submitted'|'active'|'deleted'|'failed'|'deleted_running'|'deleted_terminating'|'modifying',
     *     PreviousFleetState?: 'submitted'|'active'|'deleted'|'failed'|'deleted_running'|'deleted_terminating'|'modifying',
     *     FleetId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
