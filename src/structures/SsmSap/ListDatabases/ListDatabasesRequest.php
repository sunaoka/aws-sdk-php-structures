<?php

namespace Sunaoka\Aws\Structures\SsmSap\ListDatabases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $ComponentId
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListDatabasesRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId?: string,
     *     ComponentId?: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
