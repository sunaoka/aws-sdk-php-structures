<?php

namespace Sunaoka\Aws\Structures\Glue\GetConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CatalogId
 * @property Shapes\GetConnectionsFilter|null $Filter
 * @property bool|null $HidePassword
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class GetConnectionsRequest extends Request
{
    /**
     * @param array{
     *     CatalogId?: string|null,
     *     Filter?: Shapes\GetConnectionsFilter|null,
     *     HidePassword?: bool|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
