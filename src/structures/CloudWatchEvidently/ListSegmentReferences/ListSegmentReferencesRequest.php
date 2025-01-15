<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\ListSegmentReferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string $segment
 * @property 'EXPERIMENT'|'LAUNCH' $type
 */
class ListSegmentReferencesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     segment: string,
     *     type: 'EXPERIMENT'|'LAUNCH'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
