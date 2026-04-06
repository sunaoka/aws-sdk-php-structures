<?php

namespace Sunaoka\Aws\Structures\PCS\ListQueues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterIdentifier
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListQueuesRequest extends Request
{
    /**
     * @param array{
     *     clusterIdentifier: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
