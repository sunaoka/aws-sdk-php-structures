<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\ListGraphSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $graphIdentifier
 * @property string $nextToken
 * @property int $maxResults
 */
class ListGraphSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     graphIdentifier?: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
