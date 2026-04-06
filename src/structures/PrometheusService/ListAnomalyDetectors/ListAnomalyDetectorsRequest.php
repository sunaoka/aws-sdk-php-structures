<?php

namespace Sunaoka\Aws\Structures\PrometheusService\ListAnomalyDetectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string|null $alias
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListAnomalyDetectorsRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     alias?: string|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
