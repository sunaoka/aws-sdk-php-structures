<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetControlOperation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $operationIdentifier
 */
class GetControlOperationRequest extends Request
{
    /**
     * @param array{operationIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
