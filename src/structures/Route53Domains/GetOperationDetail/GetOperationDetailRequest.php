<?php

namespace Sunaoka\Aws\Structures\Route53Domains\GetOperationDetail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OperationId
 */
class GetOperationDetailRequest extends Request
{
    /**
     * @param array{OperationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
