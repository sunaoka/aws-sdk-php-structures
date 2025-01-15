<?php

namespace Sunaoka\Aws\Structures\Chime\InviteUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property list<string> $UserEmailList
 * @property 'PrivateUser'|'SharedDevice'|null $UserType
 */
class InviteUsersRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     UserEmailList: list<string>,
     *     UserType?: 'PrivateUser'|'SharedDevice'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
