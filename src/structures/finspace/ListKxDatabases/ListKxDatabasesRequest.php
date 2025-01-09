<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxDatabases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $nextToken
 * @property int<0, 100> $maxResults
 */
class ListKxDatabasesRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     nextToken?: string,
     *     maxResults?: int<0, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
