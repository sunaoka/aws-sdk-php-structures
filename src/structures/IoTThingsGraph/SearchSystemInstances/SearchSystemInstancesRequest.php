<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\SearchSystemInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\SystemInstanceFilter>|null $filters
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class SearchSystemInstancesRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\SystemInstanceFilter>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
