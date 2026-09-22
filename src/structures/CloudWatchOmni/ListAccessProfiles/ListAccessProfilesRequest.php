<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\ListAccessProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListAccessProfilesRequest extends Request
{
    /**
     * @param array{
     *     spaceId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
