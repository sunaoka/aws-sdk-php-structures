<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\ListSpaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $domainId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListSpacesRequest extends Request
{
    /**
     * @param array{
     *     domainId?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
