<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\ListWorkers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $site
 * @property int<1, 25>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $fleet
 */
class ListWorkersRequest extends Request
{
    /**
     * @param array{
     *     site: string,
     *     maxResults?: int<1, 25>|null,
     *     nextToken?: string|null,
     *     fleet?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
