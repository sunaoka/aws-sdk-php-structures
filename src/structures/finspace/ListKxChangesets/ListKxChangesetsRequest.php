<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxChangesets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $databaseName
 * @property string|null $nextToken
 * @property int<0, 100>|null $maxResults
 */
class ListKxChangesetsRequest extends Request
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
