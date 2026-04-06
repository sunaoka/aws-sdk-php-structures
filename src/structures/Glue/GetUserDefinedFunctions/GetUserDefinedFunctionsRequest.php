<?php

namespace Sunaoka\Aws\Structures\Glue\GetUserDefinedFunctions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property string|null $DatabaseName
 * @property string $Pattern
 * @property 'REGULAR_FUNCTION'|'AGGREGATE_FUNCTION'|'STORED_PROCEDURE'|null $FunctionType
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class GetUserDefinedFunctionsRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     DatabaseName?: string|null,
     *     Pattern: string,
     *     FunctionType?: 'REGULAR_FUNCTION'|'AGGREGATE_FUNCTION'|'STORED_PROCEDURE'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
