<?php

namespace Sunaoka\Aws\Structures\Lambda\GetFunctionRecursionConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 */
class GetFunctionRecursionConfigRequest extends Request
{
    /**
     * @param array{FunctionName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
