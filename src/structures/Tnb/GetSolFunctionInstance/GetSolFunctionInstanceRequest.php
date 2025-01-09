<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolFunctionInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $vnfInstanceId
 */
class GetSolFunctionInstanceRequest extends Request
{
    /**
     * @param array{vnfInstanceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
