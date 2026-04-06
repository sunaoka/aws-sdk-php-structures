<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\UpdateLaunchProfileMember;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $launchProfileId
 * @property 'USER' $persona
 * @property string $principalId
 * @property string $studioId
 */
class UpdateLaunchProfileMemberRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     launchProfileId: string,
     *     persona: 'USER',
     *     principalId: string,
     *     studioId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
