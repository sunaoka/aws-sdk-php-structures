<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\ListLaunchProfileMembers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $launchProfileId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string $studioId
 */
class ListLaunchProfileMembersRequest extends Request
{
    /**
     * @param array{
     *     launchProfileId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     studioId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
