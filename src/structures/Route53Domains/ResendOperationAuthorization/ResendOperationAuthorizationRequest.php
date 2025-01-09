<?php

namespace Sunaoka\Aws\Structures\Route53Domains\ResendOperationAuthorization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OperationId
 */
class ResendOperationAuthorizationRequest extends Request
{
    /**
     * @param array{OperationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
