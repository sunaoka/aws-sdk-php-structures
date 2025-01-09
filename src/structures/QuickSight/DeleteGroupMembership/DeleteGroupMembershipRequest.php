<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteGroupMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MemberName
 * @property string $GroupName
 * @property string $AwsAccountId
 * @property string $Namespace
 */
class DeleteGroupMembershipRequest extends Request
{
    /**
     * @param array{
     *     MemberName: string,
     *     GroupName: string,
     *     AwsAccountId: string,
     *     Namespace: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
