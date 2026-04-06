<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxDataviews;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $databaseName
 * @property string|null $nextToken
 * @property int<0, 100>|null $maxResults
 */
class ListKxDataviewsRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     databaseName: string,
     *     nextToken?: string|null,
     *     maxResults?: int<0, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
