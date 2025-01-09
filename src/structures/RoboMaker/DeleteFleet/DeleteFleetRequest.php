<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DeleteFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $fleet
 */
class DeleteFleetRequest extends Request
{
    /**
     * @param array{fleet: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
