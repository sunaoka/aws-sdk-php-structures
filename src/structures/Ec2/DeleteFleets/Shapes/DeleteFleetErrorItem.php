<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DeleteFleetError|null $Error
 * @property string|null $FleetId
 */
class DeleteFleetErrorItem extends Shape
{
    /**
     * @param array{
     *     Error?: DeleteFleetError|null,
     *     FleetId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
