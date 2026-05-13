<?php

namespace Sunaoka\Aws\Structures\DSQL\ListStreams;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterIdentifier
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListStreamsRequest extends Request
{
    /**
     * @param array{
     *     clusterIdentifier: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
