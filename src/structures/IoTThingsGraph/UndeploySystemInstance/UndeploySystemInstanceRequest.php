<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\UndeploySystemInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class UndeploySystemInstanceRequest extends Request
{
    /**
     * @param array{id?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
