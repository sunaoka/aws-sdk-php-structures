<?php

namespace Sunaoka\Aws\Structures\MediaTailor\GetFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionId
 */
class GetFunctionRequest extends Request
{
    /**
     * @param array{FunctionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
