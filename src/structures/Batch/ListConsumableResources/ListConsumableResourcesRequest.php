<?php

namespace Sunaoka\Aws\Structures\Batch\ListConsumableResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\KeyValuesPair>|null $filters
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class ListConsumableResourcesRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\KeyValuesPair>|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
