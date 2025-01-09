<?php

namespace Sunaoka\Aws\Structures\Lambda\PutFunctionRecursionConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FunctionName
 * @property 'Allow'|'Terminate' $RecursiveLoop
 */
class PutFunctionRecursionConfigRequest extends Request
{
    /**
     * @param array{
     *     FunctionName: string,
     *     RecursiveLoop: 'Allow'|'Terminate'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
