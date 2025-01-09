<?php

namespace Sunaoka\Aws\Structures\Appstream\DeleteFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteFleetRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
