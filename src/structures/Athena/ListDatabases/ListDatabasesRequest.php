<?php

namespace Sunaoka\Aws\Structures\Athena\ListDatabases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogName
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 * @property string|null $WorkGroup
 */
class ListDatabasesRequest extends Request
{
    /**
     * @param array{
     *     CatalogName: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null,
     *     WorkGroup?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
