<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\DeploySystemInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $id
 */
class DeploySystemInstanceRequest extends Request
{
    /**
     * @param array{id?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
