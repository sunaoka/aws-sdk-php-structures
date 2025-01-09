<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\RemoveGroupMember;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $DirectoryId
 * @property string $GroupName
 * @property string $MemberName
 * @property string $MemberRealm
 */
class RemoveGroupMemberRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     DirectoryId: string,
     *     GroupName: string,
     *     MemberName: string,
     *     MemberRealm?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
