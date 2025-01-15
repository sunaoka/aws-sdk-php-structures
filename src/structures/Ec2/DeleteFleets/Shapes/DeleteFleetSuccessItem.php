<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'submitted'|'active'|'deleted'|'failed'|'deleted_running'|'deleted_terminating'|'modifying'|null $CurrentFleetState
 * @property 'submitted'|'active'|'deleted'|'failed'|'deleted_running'|'deleted_terminating'|'modifying'|null $PreviousFleetState
 * @property string|null $FleetId
 */
class DeleteFleetSuccessItem extends Shape
{
    /**
     * @param array{
     *     CurrentFleetState?: 'submitted'|'active'|'deleted'|'failed'|'deleted_running'|'deleted_terminating'|'modifying'|null,
     *     PreviousFleetState?: 'submitted'|'active'|'deleted'|'failed'|'deleted_running'|'deleted_terminating'|'modifying'|null,
     *     FleetId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
