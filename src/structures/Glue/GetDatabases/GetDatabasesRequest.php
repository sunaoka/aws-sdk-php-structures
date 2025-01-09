<?php

namespace Sunaoka\Aws\Structures\Glue\GetDatabases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property string $NextToken
 * @property int $MaxResults
 * @property 'FOREIGN'|'ALL'|'FEDERATED' $ResourceShareType
 * @property list<'NAME'> $AttributesToGet
 */
class GetDatabasesRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     ResourceShareType?: 'FOREIGN'|'ALL'|'FEDERATED',
     *     AttributesToGet?: list<'NAME'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
