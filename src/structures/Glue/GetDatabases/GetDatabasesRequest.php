<?php

namespace Sunaoka\Aws\Structures\Glue\GetDatabases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property 'FOREIGN'|'ALL'|'FEDERATED'|null $ResourceShareType
 * @property list<'NAME'>|null $AttributesToGet
 */
class GetDatabasesRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     ResourceShareType?: 'FOREIGN'|'ALL'|'FEDERATED'|null,
     *     AttributesToGet?: list<'NAME'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
