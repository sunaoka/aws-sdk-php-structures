<?php

namespace Sunaoka\Aws\Structures\KeyspacesStreams\ListStreams;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $keyspaceName
 * @property string|null $tableName
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListStreamsRequest extends Request
{
    /**
     * @param array{
     *     keyspaceName?: string|null,
     *     tableName?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
