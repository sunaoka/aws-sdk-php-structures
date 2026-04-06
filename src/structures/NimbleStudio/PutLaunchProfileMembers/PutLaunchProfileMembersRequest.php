<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\PutLaunchProfileMembers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $identityStoreId
 * @property string $launchProfileId
 * @property list<Shapes\NewLaunchProfileMember> $members
 * @property string $studioId
 */
class PutLaunchProfileMembersRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     identityStoreId: string,
     *     launchProfileId: string,
     *     members: list<Shapes\NewLaunchProfileMember>,
     *     studioId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
