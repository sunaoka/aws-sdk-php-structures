<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\ListAccessSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $maxResults
 * @property string|null $nextToken
 * @property array<string, list<string>>|null $filters
 */
class ListAccessSourcesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int|null,
     *     nextToken?: string|null,
     *     filters?: array<string, list<string>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
