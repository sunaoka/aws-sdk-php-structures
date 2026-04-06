<?php

namespace Sunaoka\Aws\Structures\RoboMaker\ListSimulationJobBatches;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int|null $maxResults
 * @property list<Shapes\Filter>|null $filters
 */
class ListSimulationJobBatchesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int|null,
     *     filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
