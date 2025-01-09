<?php

namespace Sunaoka\Aws\Structures\Athena\ListDatabases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogName
 * @property string $NextToken
 * @property int $MaxResults
 * @property string $WorkGroup
 */
class ListDatabasesRequest extends Request
{
    /**
     * @param array{
     *     CatalogName: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     WorkGroup?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
