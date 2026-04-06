<?php

namespace Sunaoka\Aws\Structures\Deadline\ListSessionsForWorker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $fleetId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string $workerId
 */
class ListSessionsForWorkerRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     fleetId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     workerId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
