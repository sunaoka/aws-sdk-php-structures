<?php

namespace Sunaoka\Aws\Structures\Glue\GetConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CatalogId
 * @property Shapes\GetConnectionsFilter $Filter
 * @property bool $HidePassword
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 */
class GetConnectionsRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string,
     *     Filter?: Shapes\GetConnectionsFilter,
     *     HidePassword?: bool,
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
