<?php

namespace Sunaoka\Aws\Structures\Glue\GetUserDefinedFunctions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $Pattern
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class GetUserDefinedFunctionsRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     DatabaseName?: string,
     *     Pattern: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
