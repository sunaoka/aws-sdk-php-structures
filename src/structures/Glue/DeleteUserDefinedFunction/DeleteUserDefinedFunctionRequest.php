<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteUserDefinedFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $FunctionName
 */
class DeleteUserDefinedFunctionRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     DatabaseName: string,
     *     FunctionName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
