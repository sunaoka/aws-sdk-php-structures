<?php

namespace Sunaoka\Aws\Structures\Appstream\AssociateFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetName
 * @property string $StackName
 */
class AssociateFleetRequest extends Request
{
    /**
     * @param array{
     *     FleetName: string,
     *     StackName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
