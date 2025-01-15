<?php

namespace Sunaoka\Aws\Structures\SecurityLake\ListLogSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $accounts
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property list<string>|null $regions
 * @property list<Shapes\LogSourceResource>|null $sources
 */
class ListLogSourcesRequest extends Request
{
    /**
     * @param array{
     *     accounts?: list<string>|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     regions?: list<string>|null,
     *     sources?: list<Shapes\LogSourceResource>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
