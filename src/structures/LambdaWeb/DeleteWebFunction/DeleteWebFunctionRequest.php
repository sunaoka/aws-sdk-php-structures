<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\DeleteWebFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $functionName
 */
class DeleteWebFunctionRequest extends Request
{
    /**
     * @param array{functionName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
