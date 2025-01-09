<?php

namespace Sunaoka\Aws\Structures\AppSync\GetFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property string $functionId
 */
class GetFunctionRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     functionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
