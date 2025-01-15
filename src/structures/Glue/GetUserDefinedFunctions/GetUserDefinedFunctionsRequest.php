<?php

namespace Sunaoka\Aws\Structures\Glue\GetUserDefinedFunctions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property string|null $DatabaseName
 * @property string $Pattern
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
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
