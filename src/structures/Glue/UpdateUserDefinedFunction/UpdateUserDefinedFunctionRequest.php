<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateUserDefinedFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property string $DatabaseName
 * @property string $FunctionName
 * @property Shapes\UserDefinedFunctionInput $FunctionInput
 */
class UpdateUserDefinedFunctionRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     DatabaseName: string,
     *     FunctionName: string,
     *     FunctionInput: Shapes\UserDefinedFunctionInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
