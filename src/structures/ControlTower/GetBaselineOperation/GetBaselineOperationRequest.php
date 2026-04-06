<?php

namespace Sunaoka\Aws\Structures\ControlTower\GetBaselineOperation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $operationIdentifier
 */
class GetBaselineOperationRequest extends Request
{
    /**
     * @param array{operationIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
