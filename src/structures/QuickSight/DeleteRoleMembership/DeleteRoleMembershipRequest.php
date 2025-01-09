<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteRoleMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MemberName
 * @property 'ADMIN'|'AUTHOR'|'READER'|'ADMIN_PRO'|'AUTHOR_PRO'|'READER_PRO' $Role
 * @property string $AwsAccountId
 * @property string $Namespace
 */
class DeleteRoleMembershipRequest extends Request
{
    /**
     * @param array{
     *     MemberName: string,
     *     Role: 'ADMIN'|'AUTHOR'|'READER'|'ADMIN_PRO'|'AUTHOR_PRO'|'READER_PRO',
     *     AwsAccountId: string,
     *     Namespace: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
