<?php

namespace Sunaoka\Aws\Structures\SecurityLake\ListLogSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $accounts
 * @property int $maxResults
 * @property string $nextToken
 * @property list<string> $regions
 * @property list<Shapes\LogSourceResource> $sources
 */
class ListLogSourcesRequest extends Request
{
    /**
     * @param array{
     *     accounts?: list<string>,
     *     maxResults?: int,
     *     nextToken?: string,
     *     regions?: list<string>,
     *     sources?: list<Shapes\LogSourceResource>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
