<?php

namespace Sunaoka\Aws\Structures\MWAA\InvokeRestApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Path
 * @property 'GET'|'PUT'|'POST'|'PATCH'|'DELETE' $Method
 * @property Shapes\Document|null $QueryParameters
 * @property Shapes\RestApiRequestBody|null $Body
 */
class InvokeRestApiRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Path: string,
     *     Method: 'GET'|'PUT'|'POST'|'PATCH'|'DELETE',
     *     QueryParameters?: Shapes\Document|null,
     *     Body?: Shapes\RestApiRequestBody|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
