<?php

namespace Sunaoka\Aws\Structures\SecurityLake\GetDataLakeSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $accounts
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class GetDataLakeSourcesRequest extends Request
{
    /**
     * @param array{
     *     accounts?: list<string>|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
