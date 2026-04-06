<?php

namespace Sunaoka\Aws\Structures\WorkLink\DeleteFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetArn
 */
class DeleteFleetRequest extends Request
{
    /**
     * @param array{FleetArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
