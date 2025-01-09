<?php

namespace Sunaoka\Aws\Structures\SsmSap\GetOperation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OperationId
 */
class GetOperationRequest extends Request
{
    /**
     * @param array{OperationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
