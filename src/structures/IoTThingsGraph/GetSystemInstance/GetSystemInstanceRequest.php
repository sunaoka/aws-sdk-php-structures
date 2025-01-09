<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\GetSystemInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class GetSystemInstanceRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
