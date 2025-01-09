<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateFolderMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $FolderId
 * @property string $MemberId
 * @property 'DASHBOARD'|'ANALYSIS'|'DATASET'|'DATASOURCE'|'TOPIC' $MemberType
 */
class CreateFolderMembershipRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     FolderId: string,
     *     MemberId: string,
     *     MemberType: 'DASHBOARD'|'ANALYSIS'|'DATASET'|'DATASOURCE'|'TOPIC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
