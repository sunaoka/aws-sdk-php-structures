<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\SearchSystemInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\SystemInstanceFilter> $filters
 * @property string $nextToken
 * @property int<1, 250> $maxResults
 */
class SearchSystemInstancesRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\SystemInstanceFilter>,
     *     nextToken?: string,
     *     maxResults?: int<1, 250>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
