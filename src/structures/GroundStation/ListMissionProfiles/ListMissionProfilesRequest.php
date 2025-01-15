<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListMissionProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListMissionProfilesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<0, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
