<?php

namespace Sunaoka\Aws\Structures\Deadline\ListWorkers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $fleetId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListWorkersRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     fleetId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
