<?php

namespace Sunaoka\Aws\Structures\PCS\ListQueues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterIdentifier
 * @property string $nextToken
 * @property int $maxResults
 */
class ListQueuesRequest extends Request
{
    /**
     * @param array{
     *     clusterIdentifier: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
