<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\ListSegmentReferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property string $nextToken
 * @property string $segment
 * @property 'EXPERIMENT'|'LAUNCH' $type
 */
class ListSegmentReferencesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
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
