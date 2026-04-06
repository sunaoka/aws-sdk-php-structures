<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\AddGroupMember;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $DirectoryId
 * @property string $GroupName
 * @property string $MemberName
 * @property string|null $MemberRealm
 */
class AddGroupMemberRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     DirectoryId: string,
     *     GroupName: string,
     *     MemberName: string,
     *     MemberRealm?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
