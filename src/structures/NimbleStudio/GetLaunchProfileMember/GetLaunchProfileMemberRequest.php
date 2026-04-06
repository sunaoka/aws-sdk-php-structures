<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\GetLaunchProfileMember;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $launchProfileId
 * @property string $principalId
 * @property string $studioId
 */
class GetLaunchProfileMemberRequest extends Request
{
    /**
     * @param array{
     *     launchProfileId: string,
     *     principalId: string,
     *     studioId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
