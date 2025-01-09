<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetOperation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $operationId
 */
class GetOperationRequest extends Request
{
    /**
     * @param array{operationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
