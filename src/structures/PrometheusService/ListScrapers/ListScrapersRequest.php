<?php

namespace Sunaoka\Aws\Structures\PrometheusService\ListScrapers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, list<string>>|null $filters
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListScrapersRequest extends Request
{
    /**
     * @param array{
     *     filters?: array<string, list<string>>|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
