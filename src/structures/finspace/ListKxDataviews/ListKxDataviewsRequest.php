<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxDataviews;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $databaseName
 * @property string $nextToken
 * @property int<0, 100> $maxResults
 */
class ListKxDataviewsRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     databaseName: string,
     *     nextToken?: string,
     *     maxResults?: int<0, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
