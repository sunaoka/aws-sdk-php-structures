<?php

namespace Sunaoka\Aws\Structures\Appstream\StartFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class StartFleetRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
