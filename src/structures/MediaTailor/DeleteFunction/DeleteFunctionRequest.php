<?php

namespace Sunaoka\Aws\Structures\MediaTailor\DeleteFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionId
 */
class DeleteFunctionRequest extends Request
{
    /**
     * @param array{FunctionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
