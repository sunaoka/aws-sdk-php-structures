<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListFolderMembers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $FolderId
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListFolderMembersRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     FolderId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
