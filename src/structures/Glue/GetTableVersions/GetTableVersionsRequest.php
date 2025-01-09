<?php

namespace Sunaoka\Aws\Structures\Glue\GetTableVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $DatabaseName
 * @property string $TableName
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class GetTableVersionsRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     DatabaseName: string,
     *     TableName: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
