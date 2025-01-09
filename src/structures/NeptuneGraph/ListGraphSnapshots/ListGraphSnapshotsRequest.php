<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\ListGraphSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $graphIdentifier
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListGraphSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     graphIdentifier?: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
