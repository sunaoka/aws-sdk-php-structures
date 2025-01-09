<?php

namespace Sunaoka\Aws\Structures\MWAA\InvokeRestApi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Path
 * @property 'GET'|'PUT'|'POST'|'PATCH'|'DELETE' $Method
 * @property Shapes\Document $QueryParameters
 * @property Shapes\RestApiRequestBody $Body
 */
class InvokeRestApiRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Path: string,
     *     Method: 'GET'|'PUT'|'POST'|'PATCH'|'DELETE',
     *     QueryParameters?: Shapes\Document,
     *     Body?: Shapes\RestApiRequestBody
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
