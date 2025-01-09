<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\ListSegmentReferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property string $segment
 * @property 'EXPERIMENT'|'LAUNCH' $type
 */
class ListSegmentReferencesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     segment: string,
     *     type: 'EXPERIMENT'|'LAUNCH'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
