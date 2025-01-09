<?php

namespace Sunaoka\Aws\Structures\SecurityLake\GetDataLakeSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $accounts
 * @property int $maxResults
 * @property string $nextToken
 */
class GetDataLakeSourcesRequest extends Request
{
    /**
     * @param array{
     *     accounts?: list<string>,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
