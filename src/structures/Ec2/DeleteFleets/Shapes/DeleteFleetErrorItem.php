<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DeleteFleetError $Error
 * @property string $FleetId
 */
class DeleteFleetErrorItem extends Shape
{
    /**
     * @param array{
     *     Error?: DeleteFleetError,
     *     FleetId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
