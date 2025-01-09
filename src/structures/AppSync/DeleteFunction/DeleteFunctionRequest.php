<?php

namespace Sunaoka\Aws\Structures\AppSync\DeleteFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property string $functionId
 */
class DeleteFunctionRequest extends Request
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
