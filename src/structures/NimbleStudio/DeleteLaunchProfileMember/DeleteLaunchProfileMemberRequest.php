<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\DeleteLaunchProfileMember;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $launchProfileId
 * @property string $principalId
 * @property string $studioId
 */
class DeleteLaunchProfileMemberRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
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
