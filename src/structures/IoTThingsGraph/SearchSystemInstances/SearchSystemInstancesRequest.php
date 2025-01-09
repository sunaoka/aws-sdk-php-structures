<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\SearchSystemInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\SystemInstanceFilter> $filters
 * @property string $nextToken
 * @property int $maxResults
 */
class SearchSystemInstancesRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\SystemInstanceFilter>,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
