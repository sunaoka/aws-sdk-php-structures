<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListUserGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property string $AwsAccountId
 * @property string $Namespace
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListUserGroupsRequest extends Request
{
    /**
     * @param array{
     *     UserName: string,
     *     AwsAccountId: string,
     *     Namespace: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
