<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\GetWebFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $functionName
 */
class GetWebFunctionRequest extends Request
{
    /**
     * @param array{functionName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
