<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateRoleMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MemberName
 * @property string $AwsAccountId
 * @property string $Namespace
 * @property 'ADMIN'|'AUTHOR'|'READER'|'ADMIN_PRO'|'AUTHOR_PRO'|'READER_PRO' $Role
 */
class CreateRoleMembershipRequest extends Request
{
    /**
     * @param array{
     *     MemberName: string,
     *     AwsAccountId: string,
     *     Namespace: string,
     *     Role: 'ADMIN'|'AUTHOR'|'READER'|'ADMIN_PRO'|'AUTHOR_PRO'|'READER_PRO'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
