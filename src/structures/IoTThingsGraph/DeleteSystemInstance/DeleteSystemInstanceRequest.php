<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\DeleteSystemInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DeleteSystemInstanceRequest extends Request
{
    /**
     * @param array{id?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
