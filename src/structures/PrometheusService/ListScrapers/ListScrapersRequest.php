<?php

namespace Sunaoka\Aws\Structures\PrometheusService\ListScrapers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, list<string>> $filters
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 */
class ListScrapersRequest extends Request
{
    /**
     * @param array{
     *     filters?: array<string, list<string>>,
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
