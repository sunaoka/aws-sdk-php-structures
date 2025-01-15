<?php

namespace Sunaoka\Aws\Structures\SsmSap\ListDatabases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ApplicationId
 * @property string|null $ComponentId
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 */
class ListDatabasesRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId?: string|null,
     *     ComponentId?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
