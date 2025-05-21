<?php

namespace Sunaoka\Aws\Structures\Batch\ListJobsByConsumableResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $consumableResource
 * @property list<Shapes\KeyValuesPair>|null $filters
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class ListJobsByConsumableResourceRequest extends Request
{
    /**
     * @param array{
     *     consumableResource: string,
     *     filters?: list<Shapes\KeyValuesPair>|null,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
